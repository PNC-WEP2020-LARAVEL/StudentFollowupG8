@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
           
    {{-- view detail of student --}}
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Year</th>
                    <th>Student-ID</th>
                    <th>Province</th>
                    <th>Status</th>
                    <th>Picture</th>
                    <th>Tutor_id</th>
                    <th>Comment</th>
                    
                </tr>
               <tr>
                 
                   
                   <td>{{$viewStudents->id}}</td>
                   <td>{{$viewStudents->firstName}}</td>
                   <td>{{$viewStudents->lastName}}</td>
                   <td>{{$viewStudents->gender}}</td>
                   <td>{{$viewStudents->class}}</td>
                   <td>{{$viewStudents->year}}</td>
                   <td>{{$viewStudents->student_id}}</td>
                   <td>{{$viewStudents->province}}</td>
                   <td>{{$viewStudents->status}}</td>
                   {{-- <td>{{$viewStudents->picture}}</td> --}}
                   <td><img src="{{asset('images/'.$viewStudents->picture)}}" width="80" style="border-radius: 5px;" height="60" alt="User" /></td>
                   <td>{{$viewStudents->user_id}}</td>
                   <td>
                    <a href="{{route('comment', $viewStudents->id)}}">view comment</a> |
                    <a href="{{route('showForm', $viewStudents->id)}}">give comment</a>
                       
                   </td>
                 
               </tr>
            </table>      
        </div>
    </div>
</div>
@endsection
