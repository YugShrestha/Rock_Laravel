<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class UserController extends Controller
{

  //Show All Data
  public function index()
  {
    $listing = Band::latest()->filters(request(['search']))->paginate(4);
    return view('listings.index', [
      'listings' => $listing
    ]);
  }

  //Show  Single Data
  public function show($id)
  {

    $listing = Band::find($id);
    return view('listings.show', [
      'listing' => $listing
    ]);
  }
  // Create Form
  public function create()
  {
    return view('listings.create');
  }

  //Store Data
  public function Store(Request $request)
  {
    $fieldforms = $request->validate([
      'artist' => 'required',
      'title' => 'required',
      'logo' => 'required',
      'location' => 'required',
      'list' => 'required',
      'email' => ['required', 'email'],
      'description' => 'required'
    ]);
    if ($request->hasFile('logo')) {

      $fieldforms['logo'] = $request->file('logo')->store('logos', 'public');
    }

  
 // Show Cretae form
    Band::create($fieldforms);
    return redirect('/')->with('message', 'Created sucessfully');
  }

     //show edit form
     public function edit($id){
        
      return view('listings.edit',["listing"=>Band::Find($id)]);
        }

//Update Listings
  public function Update(Request $request,$id)
      {
      
       
        $fieldforms = $request->validate([
          'artist' => 'required',
          'title' => 'required',
          
          'location' => 'required',
          'list' => 'required',
          'email' => ['required', 'email'],
          'description' => 'required'
        ]);
  
  
  
          if($request->hasFile('logo')){
  
              $fieldforms['logo']=$request->file('logo')->store('logos','public');
  
              
          }
          Band::find($id)->Update($fieldforms);
          return back()->with('message','updated sucessfully');
  
}

       //Delete Listings
       public function destroy($id){
        Band::find($id)->delete();
        return redirect("/")->with('message','Deleted Sucessfully');
       }
}