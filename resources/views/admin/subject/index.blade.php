@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Subject</h2>
    </div>
        <div class ="float-end">
          @if(Auth::user()->role->name=='Teacher')
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('subject.create') }}"> Create Subject</a>
          
    @endif
        </div>
</div>
        <br>

        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        <table class="table">
                <div class="text-dark">
                    <tr>
                      
                        <th><h5>Subject Name</h5></th>
                        <th><h5>Grade</h5></th>
                        <th><h5>Section</h5></th>

                        <th></th>
                    </tr>
                    
</div>  
               <tbody>
               
               <tr>
               @foreach ($subjects as $subject)
             <td>{{ $subject->subject}}</td>
             <td>{{ $subject->grade}}</td>
             <td>{{ $subject->section}}</td>
                           
                            
                            <td>
                               @if(Auth::user()->role->name=='Teacher')
                                <a href="{{ route('subject.edit',$subject->id)}}" class="btn btn-dark"><span class="text">Edit</span></a>
                                <a href="{{ route('subject.delete',$subject->id)}}" class="btn btn-danger"><span class="text">Delete</span></a>
                                @endif
                                <a href="{{ route('topic.index',$subject->id)}}" class="btn btn-primary"><span class="text">Topics</span></a>
                             
                              </td>
                               
                        </tr>
                    @endforeach 
                </tbody>
                
            </table>
</div>
      </div>
      </div>
      </div>

               @endsection
