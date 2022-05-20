@extends('layouts.admin.master')
@section('title', 'StudentList')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this SubTopic</h4>
                </div>
            </div>
            <div class="card-body">

            <div class="card-body">

@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
                {!! Form::open()->route('subtopic.destroy',[$topic->id])->method('delete') !!}
           
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
<a href="{{ route('subtopic.index',$topic->id)}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>

{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

