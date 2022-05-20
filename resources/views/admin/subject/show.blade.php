@extends('layouts.admin.master')
@section('title','Teacher List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
               <a href="{{route('teacher.index')}}" class="float-left btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold"></i></a> </div>
                  <div> <h2 class="float-left ml-2">Subject Details</h2></div>
                    
               
                
            </div>
            <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>{{$subject->subject}}</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <td>{{ $subject->grade}}</td>
             <td>{{ $subject->section}}</td>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
