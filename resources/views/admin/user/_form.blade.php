<div id="name" class="d-none">
<div  class="row">
    
<div class = "col-md-2">
    {!! Form::select('title', 'Title')->options(['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss'])!!}</div>
    <div class = "col-md-5">
    {!! Form::text('firstname', 'FirstName') !!}</div>
    <div class="col-md-5">
    {!! Form::text('lastname', 'LastName') !!}</div>
    </div>
</div>

<div  id="add" class="d-none">  
<div class="row">
    
    <div class="col-md-12">
{!! Form::text('address', 'Address')!!}</div>
</div>
</div>
    <div class="row">  
        <div class="col-md-4">
{!! Form::select('role_id', 'Role Name')->options($roles)!!}</div>
<div class="col-md-4">
<div id = "grd" class="d-none">
{!! Form::select('grade', 'Class')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}</div>
</div>
<div class="col-md-4">
<div id = "sec" class="d-none">
{!! Form::select('section', 'section')->options(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E'])!!}</div>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div id = "qual" class="d-none">
{!! Form::select('qualification', 'Qualification')->options(['grade 1'=>'Grade 1','grade 2'=>'Grade 2','grade 3'=>'Grade 3'])!!}</div>
</div>
    <div class="col-md-4">
    <div id = "app" class="d-none">
{!! Form::text('appointmentyear', 'Appointment year')!!}</div>
</div>
<div class="col-md-4">
<div id = "exp" class="d-none">
{!! Form::text('experience', 'Experience')!!}</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
{!! Form::text('email', 'E-mail')->type('email') !!}</div>


<div class="col-md-6">
<div id ="ph" class="d-none">
{!! Form::text('phonenumber', 'Phonenumber')!!}</div>
</div>
</div>
<div class = "row">
    <div class="col-md-6">
{!! Form::text('password', 'Password')->type('password') !!}</div>
<div class="col-md-6">
{!! Form::text('password_confirmation', 'Confirm Password')->type('password') !!}</div>
</div>


@section('js')
<script >
$(document).ready(function(){
    $('#inp-role_id').change(function(){
        var val = this.value;
        console.log('value');
        addField(val);
    });
@if(isset($teacher))
    addField(2);
    $('#inp-role_id').val(2);
    $('#inp-email').val("{{$teacher->user->email}}");

@endif
    function addField(role){
        if(role == "2"){
            $('#name').removeClass('d-none');
            $('#add').removeClass('d-none');
            $('#ph').removeClass('d-none');
            $('#qual').removeClass('d-none'); 
            $('#app').removeClass('d-none');
            $('#exp').removeClass('d-none');
            $('#grd').removeClass('d-none');
            $('#sec').removeClass('d-none');
            
        } else{
            
            $('#name').addClass('d-none');
            $('#add').addClass('d-none');
            $('#ph').addClass('d-none');
            $('#qual').addClass('d-none');
            $('#app').addClass('d-none');
            $('#exp').addClass('d-none');
            $('#grd').addClass('d-none');
            $('#sec').addClass('d-none');
           
        }

    }
});

</script>
@endsection


