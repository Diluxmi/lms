@extends('layouts.admin.master')
@section('title', 'StudentList')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this Subject</h4>
                </div>
            </div>
            <div class="card-body">

            <div class="card-body">

@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
        {!! Form::open()->route('subject.destroy',[$subject->id])->method('delete') !!}
           <div class="float-start">
                <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button></div>
            <div class="float-end">
                <a href="{{ route('subject.index',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>
            </div>
{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection


