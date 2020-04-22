@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{route('admin.dashboard')}}"><h3>Admin Dashboad</h3></a>
            <a href="{{route('admin.viewFollowUpList')}}">Follow Up List</a> |
            <a href="{{route('admin.viewAchiveList')}}">Achive List</a> |
            <a href="{{route('admin.student.create')}}">add student</a> |
             <a href="{{route('admin.user.store')}}">Show Tutors</a>
             <h3>Achive List</h3>
                           
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>FullName</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Status</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($students  as $student)
                                        <tr>
                                            <td>{{$student->first_name." ".$student->last_name}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>{{$student->class}}</td>
                                          

                                                 <td>
                                                     @if ($student->status == 0)
                                                <div class="dropdown">
                                                    <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">Achive</a>                            
                                                    <ul class="dropdown-menu">
                                                    <a href="{{ route('admin.followUp',$student->id) }}">follow up</a>
                                                    </ul>  
                                                </div>
                                            @endif
                                            @if ($student->status == 1)
                                            <div class="dropdown">
                                                <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Follow up</a>                            
                                                <ul class="dropdown-menu">
                                                <a href="{{ route('admin.achive',$student->id) }}">achive</a>
                                                </ul>  
                                            </div>
                                        @endif
                                            </td>
                                    <td>
                                        <a href="{{route('admin.showForm', $student->id)}}">comment</a> |
                                        <a href="{{route('admin.comment',$student->id)}}">view comment</a>
                                    </td>
                                    <td>
                                      {{-- <a href="{{route('admin.student.destroy',$student->id)}}">delete</a> | --}}
                                      <a href="{{route('admin.student.edit',$student->id)}}"><span class="material-icons">edit</span></a> 
                                      <a class="text-primary" tabindex="-1" type="button" data-toggle="modal" data-backdrop="false" aria-hidden="true" data-target="#exampleModal{{$student->id}}" href="#"><i class="material-icons">delete</i></a>
                                      <!-- Modal -->
                                      <div class="modal fade modal-open" id="exampleModal{{$student->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              Are you sure want to delelte?
                                            </div>
                                            <div class="modal-footer">
                                              <form method="POST" action= "{{route('admin.student.destroy',$student->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>  


                                      <a data-toggle="modal" data-target="#myModal{{$student->id}}" href=""><span class="material-icons">visibility</span></a>
                                      <!-- Modal -->
                                      <div class="modal fade" id="myModal{{$student->id}}" role="dialog"  data-toggle="modal" data-target="#myModal{{$student->id}}">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
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
                                                          <strong>Tutor_Name:</strong> {{$student->user['first_name']}}.{{$student->user['last_name']}}

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