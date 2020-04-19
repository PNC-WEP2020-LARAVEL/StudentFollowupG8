@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
                  <div class="card">
                      <div class="hovereffect">
                        <img class="rounded mx-auto d-block img-responsive rounded-circle" src="{{asset('images/'.$student->picture)}}" width="200" height="250" alt="User">
                      </div>
                    <table class="table table-border" style="color:teal;">
                      <tr>
                        <th class="header-table">Student ID</th>
                       <td class="content">{{$student->student_id}} </td>
                     </tr>
                      <tr>
                         <th class="header-table">Full Name</th>
                        <td class="content">{{$student->firstName}}​​ {{$student->lastName}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Gender</th>
                        <td class="content">{{$student->gender}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Class</th>
                        <td class="content">{{$student->class}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Year</th>
                        <td class="content">{{$student->year}} </td>
                      </tr>
                       
                       <tr>
                         <th class="header-table">Province</th>
                        <td class="content">{{$student->province}} </td>
                      </tr>
                      <tr>
                         <th class="header-table">Status</th>
                        <td class="content">
                             
                           @if ($student->status == 0)
                            <div class="dropdown">
                              <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">Achive</a>                            
                              <ul class="dropdown-menu">
                                <a  href="{{ route('followUp',$student->id) }}">Follow up</a>                            
                    
                              </ul>  
                            </div>
                        @endif
                        @if ($student->status == 1)
                        <div class="dropdown">
                            <a class="text-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Follow up</a>                            
                            <ul class="dropdown-menu">
                                <a href="{{ route('achive',$student->id) }}">Achive</a>         

                            </ul>  
                          </div>
                        @endif
                           
                        
                        </td>
                      </tr>
                      <tr>
                         <th class="header-table">Tutor ID</th>
                        <td class="content">{{$student->user_id}} </td>
                      </tr>
                       <tr>
                         <th class="header-table">Comment</th>
                        <td class="content">
                          <a href="{{route('comment', $student->id)}}">view comment</a> |
                          <a href="{{route('showForm', $student->id)}}">give comment</a>
                        </td>
                      </tr>
                    </table>
                    <a class="btn btn-success pull-left mb-5" href="">Go Back</a>
                  </div>
        </div>
    </div>
</div>
@endsection
