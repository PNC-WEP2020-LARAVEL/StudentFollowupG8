<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
    public function showFormTotur(){
        return view('users.form');
    }
// add tutor
    public function addTotur(Request $request){
         $Users = User::find(1);
         $Users = new User();
         $Users->firstName=$request->get('firstName');
         $Users->lastName=$request->get('lastName');
         $Users->email=$request->get('email');
         $Users->position=$request->get('position');
         $Users->password=$request->get('password');
         $Users->save();
         return redirect('home');
    }
}

