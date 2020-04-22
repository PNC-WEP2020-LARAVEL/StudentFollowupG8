<?php

namespace App\Http\Controllers\Author;
use App\Student;
use Auth;
use App\Http\Controllers\Controller;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     // view details of students
     public function details($id)
     {  
         $student = Student::find($id);
         return view('author.student.viewdetail', compact('student'));
     }
    
      //function view follow up list
      public function viewFollowUpList(){
        $students = Student::where('status',1)->get();
        return view('author.followUpList',compact('students'));
    }
    //function view achive list
     public function viewAchiveList(){
        $students = Student::where('status',0)->get();
        return view('author.archiveList',compact('students'));
    }
    public function tutorMentorStudents(){
        $students = Student::all()->where('user_id', Auth::user()->id);
        $countStudents = Student::all()->where('user_id', Auth::user()->id)->count();
        return view('admin.underMantorStudentOfEachTutor')->with(array('students'=>$students,'countStudents'=>$countStudents));
    }


}
