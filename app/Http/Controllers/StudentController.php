<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(1);
        $students = new Student;

        request()->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        request()->picture->move(public_path('/images/'), $imageName);


        $students-> firstName = $request->get('firstname');
        $students-> lastName = $request->get('lastname');
        $students-> gender = $request->get('gender');
        $students-> class = $request->get('class');
        $students-> year = $request->get('year');
        $students-> student_id = $request->get('student_id');
        $students-> province = $request->get('province');
        $students-> status = $request->get('status');
        $students-> picture = $imageName;
        $students-> user_id = $user->id;
        $students-> save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(1);
        $students = Student::find($id);

        $students-> firstName = $request->get('firstname');
        $students-> lastName = $request->get('lastname');
        $students-> gender = $request->get('gender');
        $students-> class = $request->get('class');
        $students-> year = $request->get('year');
        $students-> student_id = $request->get('student_id');
        $students-> province = $request->get('province');
        $students-> status = $request->get('status');
        $students-> picture = $request->get('picture');
        $students-> user_id = $user->id;
        $students-> save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(1);
        $students = Student::find($id);
        $students->delete();
        return redirect('home');
    }
    // view details of students
    public function details($id)
    {
        // $user = User::find(auth::id());
        // $viewStudents = $user->students;    
        $viewStudents = Student::find($id);
        return view('student.viewdetail', compact('viewStudents'));
    }
    
}
