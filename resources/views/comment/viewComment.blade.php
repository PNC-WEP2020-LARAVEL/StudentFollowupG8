@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    
                    <th>Comment</th>
                    <th>User_Id</th>
                    <th>Action</th>
                 
                    
                </tr>
                @foreach ($comment as $item)
               <tr>
    
                 <td>{{$item->comment}}</td>
                 <td> {{ Auth::user()->firstName}} {{ Auth::user()->lastName}} </td>
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
