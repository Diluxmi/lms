@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Subject</h2>
    </div>
        <div class ="float-right">
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('subject.create') }}"> Create Subject</a>
        </div>
</div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th> Subject Name</th>
                        <th>Grade</th>
                        <th>Section</th>
                        
                        <th></th>
                    </tr>
                    
                    </thead>  
               <tbody>
               
               <tr>
               @foreach ($subjects as $subject)
             <td>{{ $subject->subject}}</td>
             <td>{{ $subject->grade}}</td>
             <td>{{ $subject->section}}</td>
                           
                            
                            <td>
                               
                                <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('subject.delete',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                                <a href="{{ route('topic.index',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Topics</span></a>
                              </td>
                               
                        </tr>
                    @endforeach 
                </tbody>
                
            </table>
            
      </div>
      </div>
      </div>

               @endsection