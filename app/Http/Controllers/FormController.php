<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function student() {
        return view('adproduct');
}
    public function userCreate(Request $req){

        $users = [
            'name' => $req->student_name,
            'email' => $req->email,
            'phone' => $req->phone,
            'date' => $req->dob,
            'semister' => $req->semister,
            'status'=> $req->status,
        ];
        Product::create($users);
        // dd($req->all());
        return redirect()->route('student.data');
    }
    public function alldatas() {
        $users = Product::get();

        return view('alldata', ['data' => $users]);
    }

    // edit 
    public function Edit($id) {

        $users = Product::where(['id'=>$id])->first();

        return view('editStudent', ['data' => $users]);
    }
    
    //update
    public function updateStudent(Request $req) {
        $users = [

            'name' => $req->student_name,
            'email' => $req->email,
            'phone' => $req->phone,
            'date' => $req->dob,
            'semister' => $req->semister,
            'status'=> $req->status,
        ];
        Product::where('id',$req->id)->update($users);
        return redirect()->route('bikelist');
    }

    public function deleteStudent($id) {
        Product::where('id',$id)->delete();
        return redirect()->back();
    }
    
}