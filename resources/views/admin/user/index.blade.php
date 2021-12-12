@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>Admin</h2>
    </div>   
        <div class="float-right">
  <a class="btn btn-primary btn-icon-spilt" href ="{{ route('user.create') }}"> Create User</a>
            </div>
</div>
        <br>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Admin Id</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                    </thead>
<tbody>
@foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->name}}</td>
                            <td>
                                <a href="{{ route('user.show',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('user.edit',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('user.delete',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
      </div>
      </div>
      </div>

               @endsection
