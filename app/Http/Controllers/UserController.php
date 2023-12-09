<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      $listing=Band::latest()->filters(request(['search']))->paginate(4);
        return view('listings.index',[
            'listings'=>$listing
        ]);
    }
    

    public function show($id){

        $listing=Band::find($id);
        return view('listings.show',[
            'listing'=>$listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }
}


