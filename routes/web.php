<?php

use App\Http\Controllers\UserController;
use App\Models\Band;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[UserController::class,'index']);


//Show Create form
route::get('/listings/create',[UserController::class,'create']);

//STore Listing Data
Route::post('/listings',[UserController::class,'store']);

//edit Lsting Data
Route::get('/listings/{id}/edit',[UserController::class,'edit']);

//Update Lsting DAta
Route::put("/listings/{id}",[UserController::class,'Update']);

//Delete Listing Data
Route::delete("/listings/{id}",[UserController::class,'destroy']);

//SHOW POST BY ID
route::get('/listings/{id}',[UserController::class,'show']);




