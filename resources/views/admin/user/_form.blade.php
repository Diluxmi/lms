{!! Form::text('name', 'Name') !!}
{!! Form::select('role_id', 'Role Name')->options($roles)!!}
{!! Form::text('email', 'E-mail')->type('email') !!}
<div id = "qual" class="d-none">
{!! Form::text('qualification', 'Qualification')!!}
</div>
<div class = "row">
    <div id = "pass" class="col-md-6">
{!! Form::text('password', 'Password')->type('password') !!}</div>
<div>
{!! Form::text('password_confirmation', 'Confirm Password')->type('password') !!}</div>
</div>

@section('js')
<script >
$(document).ready(function(){
    $('#inp-role_id').change(function(){
        var val = this.value;
        addField(val);
    });
    function addField(role){
        if(role == "2"){
            console.log(2);
            $('#qual').removeClass('d-none'); 
            $('#pass').addClass('d-none');
        } else{
            
            $('#pass').removeClass('d-none'); 
            $('#qual').addClass('d-none');
           
        }

    }
});

</script>
@endsection



