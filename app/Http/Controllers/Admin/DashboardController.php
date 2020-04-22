<?php

namespace App\Http\Controllers\Admin;
// use app\Student;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('admin.dashboard',compact('students'));
    }
    
}
