<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if (!(public_path('img/new'))) {
            mkdir(public_path('img/new'), 0777, true);
        }

        if ($request->image) {
            $image = $request->image; 
            $name = $image->getClientOriginalName(); 

            $imagename = time() . "" . $name; 

            $destination = public_path('img/new');
            $image->move($destination, $imagename);

            $user['image'] = 'img/new/'.$imagename;
        }

       $user = [

        'name' => $request->name,
        'username'=> $request->username,
        'email'=> $request->email,
        'password'=> hash::make( $request->password)
       ];
       register::create($user);
       return  redirect()->back();
    }

}
