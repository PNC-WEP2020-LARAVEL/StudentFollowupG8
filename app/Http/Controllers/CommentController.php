<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Student;
use App\User;
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
        $comment = Comment::all();
        return view('comment/viewComment', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment/formOfComment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $user = User::find(1);
        $students = Student::find(2);
        $comments=new Comment;
        $comments->comment = $request->get('comment');
        $comments->user_id = $user->id;
        $comments->student_id = $students->id;
        // dd($comments);
        $comments->save();

        return redirect('student/viewdetail');
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
        $comment= $students->comments;
        return view('comment.formOfComment', compact('comment')); 
    }
}
