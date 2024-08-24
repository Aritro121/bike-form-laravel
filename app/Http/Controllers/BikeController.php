<?php

namespace App\Http\Controllers;

use App\Models\BikeProduct;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function viewBikeForm(){
        return view('bikeForm');
    }

    public function bikeList() {
    $bikeData = BikeProduct::all(); // Adjust if your model or method is different
    return view('bikeTable', ['bikeData' => $bikeData]);
}

    public function storeNewBike(Request $req) {
        if (!is_dir(public_path('img/uploads'))) {
            mkdir(public_path('img/uploads'), 0777, true);
        }

        $fullFileDirection = '';

        if ($req->image) {
            $image = $req->image; 
            $name = $image->getClientOriginalName(); 
            $imagename = time() . "_" . $name; 
            $destination = public_path('img/uploads');
            $image->move($destination, $imagename);
            $fullFileDirection = 'img/uploads/'.$imagename;
        }

        $bikeData = [
            'image' => $fullFileDirection,
            'name' => $req->name,
            'brand' => $req->brand,
            'model' => $req->model,
            'year' => $req->year,
            'price' => $req->price,
            'description' => $req->description,
            'status' => $req->status,
        ];

        BikeProduct::create($bikeData); 
        return redirect()->route('bikelist')->with('success', 'Bike has been saved successfully.');

    }

    public function updateBike(Request $req) {
        $bikeData = [
            'name' => $req->name,
            'brand' => $req->brand,
            'model' => $req->model,
            'year' => $req->year,
            'price' => $req->price,
            'description' => $req->description,
            'status' => $req->status,
        ];
    
        BikeProduct::where('id', $req->id)->update($bikeData);
    
        return redirect()->route('bikelist')->with('success', 'Bike has been updated successfully.');
    }
    

    //bike edit
    public function EditBike($id) {

        $users = BikeProduct::where(['id'=>$id])->first();

        return view('bikeEdit', ['data' => $users]);
    }
    
    public function update(Request $req) {
        $users = [

            'name' => $req->name,
            'brand' => $req->brand,
            'model' => $req->model,
            'year' => $req->year,
            'price' => $req->price,
            'description' => $req->description,
            'status' => $req->status,
        ];
        BikeProduct::where('id',$req->id)->update($users);
        return redirect()->route('bikelist');
    }

    public function deleteBike($id) {
        BikeProduct::where('id',$id)->delete();
        return redirect()->back();
    }
}
