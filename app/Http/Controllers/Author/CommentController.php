<?php

namespace App\Http\Controllers\Author;
use App\Comment;
use App\User;
use App\Student;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    //view specific comments.
    public function comment($id)
    {
        $students = Student::find($id);
        $comment= $students->comments;
        return view('author.comment.viewComment', compact('comment')); 
    }
    // function to show form comment.
    public function showForm($id)
    {
        $students = Student::find($id);
        return view('author.comment.formOfComment', compact('students')); 
    }
// function to add comment.
public function addComment(Request $request,$id)
{
    $students = Student::find($id);
    $user = User::find(auth::id());
    $comment = new \App\Comment();
    $comment->comment = $request->get('comment');
    $comment->user_id = $user->id;
    $comment->student_id=$students->id;
    $comment->save();
    return redirect()->route('author.comment',$students->id);
}
}
