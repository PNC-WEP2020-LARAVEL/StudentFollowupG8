@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('admin.dashboard')}}"><h3>Admin Dashboad</h3></a>
            <a href="{{route('admin.viewFollowUpList')}}">Follow Up List</a> |
            <a href="{{route('admin.viewAchiveList')}}">Achive List</a> |
            <a href="{{route('admin.student.create')}}">add student</a> |
             <a href="{{route('admin.user.store')}}">Show Tutors</a>
             <h3>View Comments</h3>
                
           
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
                            <a href="{{route('admin.comment.edit', $item->id)}}">edit</a> |
                            <a class="text-primary" tabindex="-1" type="button" data-toggle="modal" data-backdrop="false" aria-hidden="true" data-target="#exampleModal{{$item->id}}" href="{{route('admin.comment.destroy', $item->id)}}">delete</a>
                              <!-- Modal -->
                              <div class="modal fade modal-open" id="exampleModal{{$item->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Comment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure want to delelte?
                                      </div>
                                      <div class="modal-footer">
                                        <form method="POST" action= "{{route('admin.comment.destroy',$item->id)}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>  

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
