@extends('layouts.admin.master')
@section('title','User List')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h2>Create Topic</h2>
                </div>
            </div>
            <div class="card-body">
               
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                


                {!! Form::open()->route('topic.store',[$subject->id])->method('post') !!}
                @include('admin.topic._form')
                <div class="row">
                    <div class="col-12">
                        <div class="float-right">
                        <button class="btn btn-primary">Create</button>
                        <a class="btn btn-dark btn-md" href="{{ route('topic.index',$subject->id) }}">Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

