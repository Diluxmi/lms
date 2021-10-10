@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Teacher</h2>
    </div>
        </div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Teacher Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Grade_id</th>
                    </tr>
                </thead>
<tbody>
@foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->grade_id}}</td>
                            <td>
                                <a href="{{ route('teacher.show',$teacher->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('teacher.edit',$teacher->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('teacher.delete',$teacher->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                   
              
      </div>
      </div>
      </div>

               @endsection
