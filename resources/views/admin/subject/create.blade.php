
@extends('layouts.admin.master')
@section('title','User List')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h2>Create Subject</h2>
                </div>
            </div>

            <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
              

                {!!Form::open()->route('subject.store')->method('post')!!}
                @include('admin.subject._form')
                <div class="row">
                    <div class="col-12">
                        <div class="float-right">
                            <div>
                            </div>
                        <button class="btn btn-primary">Create</button>
                        <a class="btn btn-dark btn-md" href="{{ route('subject.index') }}">Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

