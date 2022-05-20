@extends('layouts.admin.master')
@section('title','User List')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h2>Create SubTopic</h2>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
            
           
            <form method="post" action="{{ route('subtopic.store',[$subject->id,$topic->id])}}" enctype="multipart/form-data">
            @csrf
    
                @include('admin.subtopic._form')
                <div class="row">
                    <div class="col-12">
                    <div class="float-right">
                        <button class="btn btn-success btn-md">Create</button>
                        <a class="btn btn-dark btn-md" href="{{ route('subtopic.index',[$subject->id,$topic->id]) }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>

        </form>
                
               
            </div>
        </div>
    </div>
</div>
@endsection

