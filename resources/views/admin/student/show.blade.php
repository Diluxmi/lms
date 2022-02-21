@extends('layouts.admin.master')
@section('title','Student List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
                <a href="{{route('student.sindex')}}" class="float-left btn btn-primary btn-circle"><i class="fas fa-arrow-left"></i></a>
                    <h2 class="float-left ml-2">Student Details</h2>
                    
                </div>
                
            </div>
            <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>{{$student->firstname}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Id:{{ $student->id }}</td></tr>
                    <tr><td>Email:{{ $student->user->email }}</td></tr>
                    <tr><td> Grade:{{ $student->grade.$student->section}}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
