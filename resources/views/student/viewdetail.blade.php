@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
                  <div class="card">
                      <div class="hovereffect">
                        <img class="rounded mx-auto d-block img-responsive rounded-circle" src="{{asset('images/'.$viewStudents->picture)}}" width="200" height="250" alt="User">
                      </div>
                    <table class="table table-border" style="color:teal;">
                      <tr>
                        <th class="header-table">ID</th>
                        <td class="content">{{$viewStudents->id}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Full Name</th>
                        <td class="content">{{$viewStudents->firstName}}​​ {{$viewStudents->lastName}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Gender</th>
                        <td class="content">{{$viewStudents->gender}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Class</th>
                        <td class="content">{{$viewStudents->class}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Year</th>
                        <td class="content">{{$viewStudents->year}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Student ID</th>
                        <td class="content">{{$viewStudents->student_id}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Province</th>
                        <td class="content">{{$viewStudents->province}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Status</th>
                        <td class="content">{{$viewStudents->status}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Tutor ID</th>
                        <td class="content">{{$viewStudents->user_id}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Comment</th>
                        <td class="content">
                          <a href="{{route('comment', $viewStudents->id)}}">view comment</a> |
                          <a href="{{route('showForm', $viewStudents->id)}}">give comment</a>
                        </td>
                      </tr>
                    </table>
                    <a class="btn btn-success pull-left mb-5" href="">Go Back</a>
                  </div>
        </div>
    </div>
</div>
@endsection
