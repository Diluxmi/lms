
@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Exam Result</h2>
        </div>
        <div class="float-end">  
       
</div>
      </div>
        <br>
        <div class="float-right">

       
        <div id="name" class="Horizontal form layout">
       
<div  class="row">
    
<div class = "col-md-2">
  <div id="type">
    {!! Form::select('type', 'Term')->options(['Term1'=>'Term1','Term2'=>'Term2','Term3'=>'Term3'])!!}</div>
</div>
    <div class ="col-md-3">
      <div id="subject">
    {!! Form::select( 'subject', 'Subject')->options(['Relegion'=>'Relegion','Tamil'=>'Tamil','Maths'=>'Maths','Science'=>'Science','English'=>'English','History'=>'History','Music'=>'Music','Dance'=> 'Dance','Art'=>'Art','ICT'=>'ICT','Health'=>'Health'])!!}
    </div> 
</div>  
    <div class="col-md-2">
      <div id="grade">
        {!! Form::select( 'grade', 'Grade')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}
        </div>
</div>
    <div class = "col-md-2">
      
        {!! Form::select('section','Section')->options(['A'=>'A','B'=>'B','C'=>'C'])!!}
</div>
<div class = "col-md-2">
  <div id="btn">
  <br>
<button class = "btn btn-primary" > Create</button>
</div>
</div>
</div>
</div>
    



@section('js')
             
  <script>
  $.ajax({
                url: "{{ route('get.subject')}}",
                type: 'post',
                data: {term:term, subject:subject, grade:grade, section:section,},
            success: function(){
                swal({
                      title: "Updated",
                      text: "You data sucessfully added to the Database!",
                      icon: "success",
                      buttons: "OK",
                    }).then(function(isConfirm) {
                      if (isConfirm) {
                        location.reload();
                      }
                    });
            }
            });
    
            $(this).on('click','#save-item-btn', 'btn',function () {
    validateAndUpdate();
});

  </script>
   
  @endsection






        
            
           
        <br>
        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

 <table class="table ">
        
                    <tr>
                        
                        <th>Term</th>
                        <th>Grade</th>
                        <th>Section</th>
                        <th>Subject</th>
                       
                        
                    </tr>
                    
                     
               <tbody>
               
               <tr>
          @foreach($exams as $exam)
               <td> {{$exam->type}}</td>
              <td>{{$exam->grade}}</td>
             <td>{{$exam->section}}</td>
             <td>{{$exam->subject}}</td>
            
            
                           
                       
                   </tr>
                   @endforeach
                </tbody>
                
            </table>
</div>
</div>
      </div>
      </div>
      </div>


               @endsection



