@extends('layouts.admin.master')
@section('title','Teacher List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
               <a href="{{route('teacher.index')}}" class="float-left btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold"></i></a> </div>
                  <div> <h2 class="float-left ml-2">Teacher Details</h2></div>
                    
               
                
            </div>
            <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>{{$teacher->firstname}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Id:{{ $teacher->id }}</td></tr>
                    <tr><td>Email:{{ $teacher->user->email }}</td></tr>
                    <tr><td> Grade:{{ $teacher->grade.$teacher->section}}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
