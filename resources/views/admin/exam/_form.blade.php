
<div id="name" class="Basic form elements">


<div class="row">  
        <div class="col-md-4">
        {!! Form::select( 'index_no', 'Index Number')->options($indexs)!!}
        </div>
        <div class="col-md-4">
        {!! Form::text( 'marks', 'Mark')->options($marks)!!}
        </div>
        <div class = "col-md-2">
        <div ><br><button class = "btn btn-primary" id="save-item-btn"> Save</button></div>
    </div>
    <div class = "col-md-2">
        <div ><br><button class = "btn btn-primary" id="save-item-btn"> Edit</button></div>
    </div>


               
</div>   
</div>
</div>
</div>
