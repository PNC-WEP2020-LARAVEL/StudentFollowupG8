@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <a href="{{route('author.viewFollowUpList')}}">Follow Up List</a> |
            <a href="{{route('author.viewAchiveList')}}">Achive List</a> |
            
             <h3>Achive List</h3>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>FullName</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Tutor</th>
                                            <th>Status</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($students  as $student)
                                        <tr>
                                            <td>{{$student->first_name." ".$student->last_name}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>{{$student->class}}</td>
                                            <td>tutor</td>
                                                 <td>
                                                     @if ($student->status == 0)
                                                Archive
                                            @endif
                                            @if ($student->status == 1)
                                           Follow up
                                        @endif
                                            </td>
                                    <td>
                                        <a href="{{route('author.showForm', $student->id)}}">comment</a>|
                                        <a href="{{route('author.comment',$student->id)}}">view comment</a>
                                    </td>
                                    
                                    <td>
                                        <a data-toggle="modal" data-target="#myModal{{$student->id}}" href="">detail</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal{{$student->id}}" role="dialog"  data-toggle="modal" data-target="#myModal{{$student->id}}">
                                          <div class="modal-dialog">
                                          
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h3>View detail of students</h3>

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               
                                                
                                              </div>
                                              <div class="modal-body">
                                                <div class="card-header p-4 ">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="container-image">
                                                            <img class="mx-auto d-block" src="{{asset('img_student/'.$student->picture)}}" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                                                        </div>
                                                    </div>
                                                      <hr>
                                                      <div class="row d-flex justify-content-between">
                                                        <p> <strong>First Name: </strong>{{$student['first_name']}} </p>
                                                        <p><strong>Last Name: </strong>{{$student['last_name']}}</p>
                                                      </div>
                                                      <div class="row d-flex justify-content-between">
                                                        <p><strong>ID_Student: </strong>{{$student['student_id']}}</p>
                                                        <p><strong>Class: </strong>{{$student['class']}}</p>
                                                      </div>
                                                      <div class="row d-flex justify-content-between">
                                                        <p><strong>Province </strong>{{$student['province']}}</p>
                                                        <p><strong>Gender: </strong>{{$student['gender']}}</p>  
                                                      </div>
                                                      <div class="row d-flex justify-content-between">
                                                        <p><strong>Class </strong>{{$student['class']}}</p>
                                                        <p><strong>year: </strong>{{$student['year']}}</p>  
                                                      </div>
                                                      <div class="row d-flex justify-content-between">
                                                        <p>
                                                            <strong>Status </strong>
                                                            @if ($student->status == 0)
                                                            Archive
                                                        @endif
                                                        @if ($student->status == 1)
                                                            Follow up
                                                        @endif
                                                        </p>
                                                        <p>
                                                          <strong>Tutor_Name:</strong> 
                                                          @if ($student->user_id == null)
                                                          Not yet Tutor
                                                          @else
                                                          {{$student->user['first_name']}}.{{$student->user['last_name']}}
                                                                
                                                            @endif

                                                        </p>
                                                      </div>
                                                </div>
                                            </div>

                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                    </td>
                                        </tr>
                                        @endforeach
                                    </table>      
             
        </div>
    </div>
</div>
@endsection