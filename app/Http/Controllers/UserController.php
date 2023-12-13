<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

class UserController extends Controller
{
    //Show Register/Create form
    public function create(){
     return view('users.register');
    }

    public function store(Request $request){

        dd($request->all());
        $formFileds=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('user','email')],
            'password'=>'required|confirmed|min:6'
        ]);
     //Hash Password

     $formFileds['password']=bcrypt($formFileds['password']);
     //Create Users
     $user=User::create($formFileds);

     //login
     auth()->login($user);
     return redirect('/')->with('message','user created');
    }



    public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You Have Been LoggedOut');
       

    }

    //Show Login
    public function login(){
        return view("users.login");
    }
}