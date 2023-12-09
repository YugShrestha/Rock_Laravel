<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Show All Data
    public function index(){
      $listing=Band::latest()->filters(request(['search']))->paginate(4);
        return view('listings.index',[
            'listings'=>$listing
        ]);
    }
    
   //Show  Single Data
    public function show($id){

        $listing=Band::find($id);
        return view('listings.show',[
            'listing'=>$listing
        ]);
    }
   // Create Form
    public function create(){
        return view('listings.create');
    }

    //Store Data
    public function Store(Request $request){
      $fieldforms=$request->validate([
        'artist'=>'required',
        'title'=>'required',
        
        'location'=>'required',
        'list'=>'required',
        'email'=>['required', 'email'],
        'description'=>'required'
      ]);

      Band::create($fieldforms);
     return redirect('/');

    }
}


