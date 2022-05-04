@extends('layouts.admin.master')
@section('title','User List')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h2>Create Exam Result </h2>
                </div>
            </div>
            <div class="card-body">
                @if (session('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
                @endif
                {!! Form::open()->route('assessment.store')->method('post') !!}
                @include('admin.assessment._form')
                <div class="row">
                    <div class="col-12">
                        <div class="float-right">
                        <button class="btn btn-primary">Create</button>
                        <a class="btn btn-secondary" href=""></i>Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

