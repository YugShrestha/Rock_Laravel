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
   

//SHOW POST BY ID
route::get('/listings/{id}',[UserController::class,'show']);

