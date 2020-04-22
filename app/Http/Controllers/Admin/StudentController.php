<?php

namespace App\Http\Controllers\Admin;
use App\Student;
use App\User;
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
        return view('admin.student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student =new Student;

        request()->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        request()->picture->move(public_path('/img_student/'), $imageName);
        
        $student -> first_name = $request -> get('first_name');
        $student -> last_name = $request -> get('last_name');
        $student -> gender = $request -> get('gender');
        $student -> year = $request -> get('year');
        $student -> province = $request -> get('province');
        $student -> picture = $imageName;
        $student -> class = $request -> get('class');
        $student -> student_id = $request -> get('student_id');
        $student -> save();
        return redirect('admin/dashboard');
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
    public function edit($id){
        $student = Student::find($id);
        return view('admin.student.formEditStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student -> first_name = $request -> get('first_name');
        $student -> last_name = $request -> get('last_name');
        $student -> gender = $request -> get('gender');
        $student ->  class = $request -> get('class');
        $student -> student_id = $request -> get('student_id');
        $student -> year = $request -> get('year');
        $student -> province = $request -> get('province');
        $student -> save();
        
        return redirect('admin/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student -> delete();
        return back();
    }
    // view details of students
    public function details($id)
    {  
        $student = Student::find($id);
        return view('admin.student.viewdetail', compact('student'));
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

     //function view follow up list
     public function viewFollowUpList(){
        $students = Student::where('status',1)->get();
        return view('admin.followUpList',compact('students'));
    }
    //function view achive list
     public function viewAchiveList(){
        $students = Student::where('status',0)->get();
        return view('admin.archiveList',compact('students'));
    }

    public function addTutorToStudent($IdOfUser, $idOfStudent){
        $tutor = User::find($IdOfUser);
        $student = Student::find($idOfStudent);
        $student -> user_id = $tutor->id;
        $student -> save();
        return redirect('admin/viewFollowUpList');
    }

    public function tutorMentorStudents(){
        $students = Student::all()->where('user_id', Auth::user()->id);
        $countStudents = Student::all()->where('user_id', Auth::user()->id)->count();
        return view('admin.underMantorStudentOfEachTutor')->with(array('students'=>$students,'countStudents'=>$countStudents));
    }


}
