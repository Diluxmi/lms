@extends('layouts.admin.master')
@section('title','sindex')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Student</h2>
    </div>
        
           
        </div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Grade</th>
                        <th></th>
                    </tr>
                    
                    </thead>  
               <tbody>
               
               <tr>
               @foreach ($students as $student)
              <td>{{ $student->id}}</td>
             <td>{{ $student->firstname}}</td>
             <td>{{ $student->user->email}}</td>
             <td>{{ $student->grade.$student->section}}</td>
                           
                            <td>
                                <a href="{{ route('student.show',$student->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('student.edit',$student->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('student.delete',$student->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
                
            </table>
            
      </div>
      </div>
      </div>

               @endsection
