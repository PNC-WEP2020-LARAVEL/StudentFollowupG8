<?php

namespace App\Http\Controllers\Author;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller 
{
    public function index(){
        $students = Student::all();
        return view('author.dashboard',compact('students'));
    }
}
