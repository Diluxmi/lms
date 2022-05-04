@extends('layouts.admin.master')
@section('title','gindex')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Student</h2>
    </div>
    
</div>
           
      
        <br>
        <div class="float-right">
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th>Student grade</th>
                    <th>Select</th>
                    </tr>
                    </thead>  
               <tbody>
               <tr>
               {!! Form::open()->route('student.sindex')->method('get') !!}
               
               <td>
               
               {!! Form::select( 'grade_section', 'Grade Section')->options($grades)!!}
               </td>
               <td>
               <button class="btn btn-primary btn-icon-spilt"><span class="text">Select</span></button>
              
              </td>
              {!! Form::close() !!}
              </tr>
            
        
            
            </tbody>
            </table>
        </div>
       

      </div>      
      </div>
      </div>
      @endsection

            
