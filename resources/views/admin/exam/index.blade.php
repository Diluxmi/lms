
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
        <div class="float-end">  </div>
      </div>
        <br>
        <div class="float-right">
       <div id="name" class="Horizontal form layout">
       
<div  class="row">
    
<div class = "col-md-2">
  <div id="#inp-term">
    {!! Form::select('term', 'Term')->options(['term1'=>'Term1','term2'=>'Term2','term3'=>'Term3'])!!}</div>
</div>
    <div class ="col-md-3">
      <div id="#inp-subject">
    {!! Form::select( 'subject', 'Subject')->options($subjects)!!}
    </div> 
</div>  
    <div class="col-md-2">
        <div id="#inp-grade">{!! Form::select( 'grade', 'Grade')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}</div>
    </div>
    <div class = "col-md-2">
      <div id=#inp-section>{!! Form::select('section','Section')->options(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E'])!!}</div>
    </div>
   
    <div class = "col-md-2">
        <div ><br><button class = "btn btn-primary" id="save-item-btn"> Create</button></div>
    </div>
</div>
</div>
    
    
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
               @foreach($exams as $exam)
               <tr>
          
               <td> {{$exam->type}}</td>
              <td>{{$exam->grade}}</td>
             <td>{{$exam->section}}</td>
             <td>{{$exam->subject->subject}}</td>
             
            
                  <td>
                  <a href="{{route('exam.create',[$exam->grade,$exam->section])}}" class="btn btn-primary"><span class="text">Add Result</span></a>
                  <a href="{{route('exam.delete')}}" class="btn btn-danger"><span class="text">Delete</span></a>
                  <td>
                  
                </td>  
                </td>
                                
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


               @section('js')
             
  <script>
     $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

    $( '#save-item-btn').on('click',function (e) {
    
      e.preventDefault();
              

      $.ajax({
                url: "{{ route('get.exam')}}",
                type: 'POST',
                data : { term:$('#inp-term').val(), subject:$('#inp-subject').val(), grade:$('#inp-grade').val(), section:$('#inp-section').val()},
            success: function(data){
              if(data['success']){
                alert(data['success']);
                location.reload();
              }
            }
            });
    
            
    
});

  </script>
   
  @endsection



