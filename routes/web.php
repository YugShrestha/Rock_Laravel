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
route::get('/listings/create',[ListingController::class,'create']);

//STore Listing Data
Route::post('/listings',[ListingController::class,'store']);

//edit Lsting Data
Route::get('/listings/{id}/edit',[ListingController::class,'edit']);

//Update Lsting DAta
Route::put("/listings/{id}",[ListingController::class,'Update']);

//Delete Listing Data
Route::delete("/listings/{id}",[ListingController::class,'destroy']);

//SHOW POST BY ID
route::get('/listings/{id}',[ListingController::class,'show']);

//show Register

route::get('/register',[UserController::class,'create']);


//create user

route::post('/users',[UserController::class,'store']);