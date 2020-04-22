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
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{$item->first_name}} {{$item->last_name}}</td>
                                        <td>{{$item->position}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            @if ($item->role->id == 1)
                                                Admin
                                            @else
                                                <a href="{{route('admin.user.destroy',$item->id)}}">Delete</a>
                                            
                                            @endif
                                            
                                        </td>
                                    </tr>
                    
                                @endforeach
                            </table>
                                   
             
        </div>
    </div>
</div>
@endsection