@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2>
          <a class="btn btn-primary btn-icon-spilt" href ="{{ route('student.create') }}"> Create Student</a>
            
            </a>
          </h2>
    </div>
</div>
</div>
</div>
</div>
@endsection