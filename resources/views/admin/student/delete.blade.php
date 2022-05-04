@extends('layouts.admin.master')
@section('title', 'StudentList')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this Student?</h4>
                </div>
                <tr>
                    
            </div>

          
            <div class="card-body">

            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    
        
        <tr>
            
            <th>Sdudent id: 3</th><br>
            <th>Name: abi</th><br>
            <th>Email : abi@gmail.com</th></br>
            
            <th>Grade:7B</th>
           
            
        </tr>
        
   


                {!! Form::open()->route('student.destroy',[$student->id])->method('delete') !!}
                <div class = "float-left"> 
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button></div>
            <div class = "float-end">
<a href="{{ route('student.sindex')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>
</div>
{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

