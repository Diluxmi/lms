@extends('layouts.admin.master')
@section('title','sindex')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Student</h2>
    </div>
        
           
        </div>
        <br>

        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        <table class="table ">
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
                                <a href="{{ route('student.show',$student->id)}}" class="btn btn-secondary"><span class="text">Show</span></a>
                                <a href="{{ route('student.edit',$student->id)}}" class="btn btn-dark btn-icon-text "><span class="text">Edit</span></a>
                                <a href="{{ route('student.delete',$student->id)}}" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
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
