@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
    <div class="col-xl-12 stretch-card grid-margin">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E2C055;;">
        <div class="card-body">
            <div class="row no-gutters align-items-center" >
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h3>
                    LMS  FOR  Cp/Gp/Galaboda T.V </h3></div>
                    <div class="float-end">
                        <a class="btn btn-primary btn-icon-spilt" href ="{{ route('student.create') }}"> Create Student</a>
                    </div> 
                   </div>
                  <div class="col-auto">   
                </div>
            </div>
        </div>
    </div>
</div>
</div>


  <div class="row">
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E6A8F5;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Number of Subject</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\User::count() }}</div>
                    <a href="" class="btn btn-primary stretched-link">Reports</a>
                    </div>
                    <div class="col-auto">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #88ADF6;" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Exam Details</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\Teacher::count() }}</div>
                    <a href="" class="btn btn-primary stretched-link">Reports</a>
                </div>
                <div class="col-auto">
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #90D662;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Assessment Details</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Models\Student::count() }}</div>
                    <a href="" class="btn btn-primary stretched-link">Reports</a>
                </div>
                <div class="col-auto">  
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-color: #DE3163;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Time table</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    <a href="" class="btn btn-primary stretched-link">Reports</a>
                </div>
                <div class="col-auto">  
                </div>
            </div>
        </div>
    </div>
</div>
</div>





@endsection