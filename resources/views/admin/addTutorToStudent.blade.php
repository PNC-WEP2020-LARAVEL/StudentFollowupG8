@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">

                           <a href="{{route('admin.viewFollowUpList')}}">Follow Up List</a> |
                           <a href="{{route('admin.viewAchiveList')}}">Achive List</a> |
                           <a href="{{route('admin.student.create')}}">add student</a> |
                            <a href="http://">Show Tutors</a>
                            <table class="table table-bordered">
                                <tr>
                                    <th>**Name**</th>
                                    <th>**Position**</th>
                                    <th>**E-Mail**</th>
                                    <th>**Action**</th>
                                </tr>
                                
                                @foreach($tutors as $tutor) 
                                <tr>
                                <td>{{$tutor->first_name}}.{{$tutor->last_name}}</td>
                                <td>{{$tutor->position}}</td>
                                <td>{{$tutor->email}}</td>
                                <td>
                                   {{-- <a href="{{route('admin.addTutorToStudent',[$tutor->id,$student->id])}}">assign</a> --}}
                                   <form action="{{route('admin.addTutorToStudent',[$tutor->id,$student->id])}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary btn-sm">Assing</button>
                                  </form>
                                </td>
                                </tr>
                                @endforeach 
                                  
                            </table>
                                   
             
        </div>
    </div>
</div>
@endsection