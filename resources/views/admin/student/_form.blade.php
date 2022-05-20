<div id="name" class="Basic form elements">

<div  class="row">
    
<div class = "col-md-2">
    {!! Form::select('title', 'Title')->options(['Mr'=>'Mr','Miss'=>'Miss'])!!}</div>
    <div class = "col-md-5">
    {!! Form::text('firstname', 'FirstName') !!}</div>
    <div class="col-md-5">
    {!! Form::text('lastname', 'LastName') !!}</div>
    </div>
  
<div class="row">
    
    <div class="col-md-12">
{!! Form::text('address', 'Address')!!}</div>
</div>


<div class="row">  
<div class="col-md-4">
{!! Form::select('grade', 'Class')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}</div>
<div class="col-md-4">
{!! Form::select('section', 'section')->options(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E'])!!}</div>
</div>

<div class="row">
<div class="col-md-6">
{!! Form::text('email', 'E-mail')->type('email') !!}</div>
<div class="col-md-6">
{!! Form::text('phonenumber', 'Phonenumber')!!}</div>
</div>

<div class = "row">
    <div class="col-md-6">
{!! Form::text('password', 'Password')->type('password') !!}</div>
<div class="col-md-6">
{!! Form::text('password_confirmation', 'Confirm Password')->type('password') !!}</div>
</div>
<div class="row">
<div class="col-md-6">  
    <div class="col-md-12">
{!! Form::text('index_no', 'Index No')!!}</div>
</div>
</div>
</div>
@section('js')
<script>
   
@if(isset($student))
   
    $('#inp-email').val("{{$student->user->email}}");

@endif

    
</script>
@endsection





