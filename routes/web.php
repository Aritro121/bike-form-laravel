<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\ControllerAbout;
use App\Http\Controllers\ControllerBooking;
use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerService;
use App\Http\Controllers\ControllerTeam;
use App\Http\Controllers\ControllerTestimonial;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerHome::class, 'index']);
Route::get('/about', [ControllerAbout::class, 'about']);
Route::get('/service', [ControllerService::class, 'service']);
Route::get('/contact', [ControllerContact::class, 'contact']);
Route::get('/team', [ControllerTeam::class, 'team']);
Route::get('/testimonial', [ControllerTestimonial::class, 'testimonial']);

//login and register
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', function () {
    return view('register-and-login.register');
});
Route::post('user/register/store', [RegisterController::class, 'register'])->name('user.register.store');

//databast route--->
Route::get('/adproduct', [FormController::class, 'student']);
Route::get('editstudent/{id}', [FormController::class, 'edit'])->name('student.edit'); //edit student profile
Route::get('/alldata', [FormController::class, 'alldatas'])->name('student.data');
Route::post('/submit-product', [FormController::class, 'userCreate'])->name('submit-product');
Route::post('/studentupdate', [FormController::class, 'updateStudent'])->name('student.update'); //update
Route::post('/studentdelete/{id}', [FormController::class, 'deleteStudent'])->name('student.delete'); //delete


////bike////--------///

Route::get('/add-new-bike', [BikeController::class, 'viewBikeForm'])->name('viewBikeForm');
Route::get('/bike-list', [BikeController::class, 'bikeList'])->name('bikelist');
//edit
Route::get('/bike-edit/{id}', [BikeController::class, 'EditBike'])->name('bikeEdit');
Route::get('/bike-edit-delete/{id}', [BikeController::class, 'deleteBike'])->name('bikeEditDelete');

Route::post('/store-new-bike', [BikeController::class, 'storeNewBike'])->name('storeNewBike');
Route::post('/update-bike', [BikeController::class, 'update'])->name('bikeUpdate'); //bike update



