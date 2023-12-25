<?php

use App\Http\Controllers\ListingController;
use App\Models\Band;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dbconn',function(){
    return view('database');
});
//SHOW ALL THE POST
Route::get('/',[ListingController::class,'index']);


//Show Create form
route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//STore Listing Data
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//edit Lsting Data
Route::get('/listings/{id}/edit',[ListingController::class,'edit'])->middleware('auth');

//Update Lsting DAta
Route::put("/listings/{id}",[ListingController::class,'Update'])->middleware('auth');

//Delete Listing Data
Route::delete("/listings/{id}",[ListingController::class,'destroy'])->middleware('auth');

//SHOW POST BY ID
route::get('/listings/{id}',[ListingController::class,'show']);

//show Register

route::get('/register',[UserController::class,'create'])->middleware('guest');


//create user

route::post('/users',[UserController::class,'store']);

//logout user

route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//create login form
route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Login Users

route::post('/users/authenticate',[UserController::class,'authenticate']);