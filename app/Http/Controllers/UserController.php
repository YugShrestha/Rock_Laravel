<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      $listing=Band::all();
        return view('index',[
            'listings'=>$listing
        ]);
    }
    

    public function show($id){

        $listing=Band::find($id);
        return view('show',[
            'listing'=>$listing
        ]);
    }
}
asdasdasda