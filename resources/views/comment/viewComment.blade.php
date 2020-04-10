@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                    <th>User_Id</th>
                    <th>Student_Id</th>
                    <th>Action</th>
                    
                    
                </tr>
                {{-- {{dd($comment)}} --}}
                @foreach ($comment as $item)
               <tr>
                
                    <td>{{$item->id}}</td>
                    <td>{{$item->comment}}</td>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->student_id}}</td>
                    <td>
                        <a href="">edit</a> |
                        <a href="">delete</a>
                    </td>
                </tr>
                 @endforeach
                 
              
            </table>      
        </div>
    </div>
</div>
@endsection
