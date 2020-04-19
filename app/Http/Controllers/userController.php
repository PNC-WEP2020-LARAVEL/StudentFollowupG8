<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
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
    //function follow up
    public function followUp($id){
        $students = Student::find($id);
        $students -> status= true;
        $students -> save();
        return back();
    }
    //function Achive
    public function achive($id){
        $students = Student::find($id);
        $students -> status= false;
        $students -> save();
        return back();
    }

    //function Achive
    // public function viewFollowUpList(){
    //     $students = Student::all();
    //     return redirect('followUpList.followUpList',compact('students'));
    // }

}

