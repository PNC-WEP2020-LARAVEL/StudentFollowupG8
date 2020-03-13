@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            {{-- add tutor --}}
          
        <a class="nav-link" href="{{ route('register') }}">{{ __('Add Tutor') }}</a>

        {{-- crud student --}}
        <a href="{{route('home.create')}}">Add</a>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Year</th>
                    <th>Student-ID</th>
                    <th>Province</th>
                    <th>Status</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->firstName." ".$student->lastName}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->province}}</td>
                    <td>{{$student->status}}</td>
                    <td>{{$student->picture}}</td>
                    <td>
                        <a href="{{route('home.edit', $student->id)}}">Edit</a> |
                        <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>      
        </div>
    </div>
</div>
@endsection
