
@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Assessment Result</h2>
        </div>
      
      </div>
        <br>
        <div class="float-right">

        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        <table class="table">
               
               <tbody>
               {!! Form::open()->route('assessment.store')->method('post') !!}
             
               <tr>
                <td>{!! Form::select( 'grade', 'Grade')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}</td>
               <td> {!! Form::select('section','Section')->options(['A'=>'A','B'=>'B','C'=>'C'])!!}</td>
               <td> {!! Form::select('type','Term')->options(['term1'=>'term1','term2'=>'term2','term3'=>'term3'])!!}</td>
              <td> {!! Form::select( 'subject', 'Subject')->options(['Relegion'=>'Relegion','Tamil'=>'Tamil','Maths'=>'Maths','Science'=>'Science','English'=>'English','History'=>'History','Music'=>'Music','Dance'=> 'Dance','Art'=>'Art','ICT'=>'ICT','Health'=>'Health'])!!}</td>
               <td>
               
               <a class="btn btn-primary btn-icon-spilt" href ="{{route('assessment.create')}}"> Create</a>
              </td>
              {!! Form::close() !!}
              </tr>
            
        
            
            </tbody>
            </table>
        </div>
        <br>
        <table class="table ">
        
        <tr>
            
            <th>Term/th>
            <th>Grade</th>
            <th>Section</th>
            <th>Subject</th>
           
            
        </tr>
        
        </thead>  
   <tbody>
   
   <tr>

   <td> Term1</td>
  <td>6</td>
 <td>B</td>
 <td>Maths</td>


               
                <td>
                  
                    <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
                    <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
                </td>
            </tr>

            <tr>

<td> Term1</td>
<td>6</td>
<td>B</td>
<td>Maths</td>


          
           <td>
             
               <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
               <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
           </td>
       </tr>


       <tr>

<td> Term2</td>
<td>6</td>
<td>B</td>
<td>Maths</td>


          
           <td>
             
               <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
               <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
           </td>
       </tr>



       <tr>

<td> Term1</td>
<td>10</td>
<td>C</td>
<td>Maths</td>


          
           <td>
             
               <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
               <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
           </td>
       </tr>




       <tr>

<td> Term2</td>
<td>11</td>
<td>B</td>
<td>Tamil</td>


          
           <td>
             
               <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
               <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
           </td>
       </tr>



       <tr>

<td> Term2</td>
<td>7</td>
<td>A</td>
<td>Science</td>


          
           <td>
             
               <a href="" class="btn btn-dark btn-icon-text "><span class="text">Add</span></a>
               <a href="" class="btn btn-danger btn-mdi mdi-delete"><span class="text">Delete</span></a>
           </td>
       </tr>
     
    </tbody>
    
</table>
</div>
</div>
</div>
</div>


               @endsection



