@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Topic</h2>
    </div>
        <div class ="float-right">
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('topic.create',$subject->id)}}"> Create Topics</a>
        </div>
</div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr><th>Subject Id</th>
                        <th> Topic Name</th>
                        <th>Content</th>
                        <th> </th>
                        
                        <th></th>
                    </tr>
                    
                    </thead>  
               <tbody>
               
               <tr>
               @foreach ($topics as $topic)
               <td>{{$subject->id}}</td>
             <td>{{ $topic->topicname}}</td>
             <td>{{ $topic->content}}</td>
             <td> </td>
                           
                            
                            <td>
                               
                                <a href="{{ route('topic.edit',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('topic.delete',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                                                              </td>
                               
                        </tr>
                    @endforeach 
                </tbody>
                
            </table>
            
      </div>
      </div>
      </div>

               @endsection
