

@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            {{-- add tutor --}}
            <a  href="showformTutor">{{ __('Add Tutor') }}</a>|
            {{-- crud student --}}
            <a href="{{route('home.create')}}">Add Student</a> |
            <a href="{{route('viewAchiveList')}}">View Achive list</a>
        <h1>These are the follow up student.</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->firstName." ".$student->lastName}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->class}}</td>
                {{-- <td>{{$student->status}}</td> --}}
                <td>
                 @if ($student->status == 0)
                        <div class="dropdown">
                          <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">Achive</a>                            
                          <ul class="dropdown-menu">
                           <a href="{{ route('followUp',$student->id) }}">follow up</a>
                          </ul>  
                        </div>
                    @endif
                    @if ($student->status == 1)
                    <div class="dropdown">
                        <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Follow up</a>                            
                        <ul class="dropdown-menu">
                          <a href="{{ route('achive',$student->id) }}">achive</a>
                        </ul>  
                      </div>
                    @endif

                 
                </td>
                <td>
                    <a href="{{route('details',$student->id)}}" class="btn btn-info text-light">Detail</a>
                    <a href="{{route('home.edit', $student->id)}}" class="btn btn-primary">Edit</a>
                    <form method="post" class="delete_form" action="{{route('home.destroy', $student->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>      
           
        </div>
    </div>
</div>
@endsection

