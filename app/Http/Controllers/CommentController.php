<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Student;
use Auth;
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
        // $students = Student::find($id);
        // $user = User::find(auth::id());
        // $comment = new \App\Comment();
        // $comment->comment = $request->get('comment');
        // $comment->user_id = $user->id;
        // $comment->student_id=$students->id;
        // $comment->save();

        // return redirect()->route('comment.viewComment',$students->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
//view specific comments.
    public function comment($id)
    {
        $students = Student::find($id);
        $comment= $students->comments;
        return view('comment.viewComment', compact('comment')); 
    }
    // function to show form comment.
    public function showForm($id)
    {
        $students = Student::find($id);
        return view('comment.formOfComment', compact('students')); 
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
        return redirect()->route('comment',$students->id);
    }

}
