@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Student</h2>
    </div>
        <div class ="float-right">
  <a class="btn btn-primary btn-icon-spilt" href ="{{route('student.create')}}"> <i class="mdi mdi-account-plus mdi-18px"></i> Create Student</a>
            </div>
           
        </div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Grade_id</th>
                    </tr>
                </thead>
<tbody>
@foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->grade_id}}</td>
                            <td>
                                <a href="{{ route('student.show',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('student.edit',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('student.delete',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

                        
                  
                </tbody>
            </table>
      </div>
      </div>
      </div>

               @endsection
