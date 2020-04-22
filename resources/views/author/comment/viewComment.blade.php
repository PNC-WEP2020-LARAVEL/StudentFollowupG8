@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('author.dashboard')}}"><h3>Tutor Dashboard</h3></a>
            <a href="{{route('author.viewFollowUpList')}}">Follow Up List</a> |
            <a href="{{route('author.viewAchiveList')}}">Achive List</a> |
            <h3>View of Comments</h3>
            <table class="table table-bordered">
                <tr>
                    
                    <th>Comment</th>
                    <th>User_Id</th>
                    <th>Action</th>
                 
                    
                </tr>
                @foreach ($comment as $item)
               <tr>
    
                 <td>{{$item->comment}}</td>
                 <td> {{$item->User->first_name}}. {{ $item->User->last_name}} </td>
               
                    
                    @if (Auth::id() == $item->user_id)
                    <td>
                       <a href="">edit</a> |
                       <a href="">delete</a>
                    </td>
                    @else
                    <td>
   
                        No permission
                    </td>
                    @endif
                     
                 
                </tr>
                 @endforeach
                 
              
            </table>      
        </div>
    </div>
</div>
@endsection
