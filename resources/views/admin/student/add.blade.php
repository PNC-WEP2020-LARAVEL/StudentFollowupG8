


@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            {{-- form add --}}
            <div class="card">
                <div class="card-header"><h4>Form Register</h4></div>
                <div class="card-body">
                    <form action="{{route('admin.student.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" class="form-control" name="first_name" required placeholder="First Name..">
                        <br>
                        <input type="text" class="form-control" name="last_name" required placeholder="Last Name ..">
                        <br>
                        <input type="radio" id="male" name="gender" value="Male" checked> Male
                        <input type="radio" id="female" name="gender" value="Female"> Female
                        <br>
                        <input type="text" class="form-control" name="class" required placeholder="class">
                        <br>
                        <input type="text" class="form-control" name="student_id" required placeholder="student_id">
                        <br>
                        <input class="form-control" type="number" name="year" required placeholder="year">
                        <br>
                        <input class="form-control" type="text" name="province" required placeholder="province">
                        <br>
                      
                        <br>
                        {{-- {{ csrf_field() }} --}}
                        <label for="img">Choose Picture</label>
                        {{-- <input type="file" name="picture" required=""> --}}
                        <input type="file" name="picture" required>
                        <br>
                        <button type="submit" class="btn btn-info btn-block"> Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
