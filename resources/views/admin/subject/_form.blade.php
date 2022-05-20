<div id="name" class="Basic form elements">
<div class="row">
    <div class ="col-md-4">
    {!! Form::select( 'subject', 'Subject')->options(['Relegion'=>'Relegion','Tamil'=>'Tamil','Maths'=>'Maths','Science'=>'Science','English'=>'English','History'=>'History','Music'=>'Music','Dance'=> 'Dance','Art'=>'Art','ICT'=>'ICT','Health'=>'Health'])!!}
    </div>   
    <div class="col-md-4">
        {!! Form::select( 'grade', 'Grade')->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11'])!!}
        </div>
    <div class = "col-md-4">
        {!! Form::select('section','Section')->options(['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E'])!!}
       
</div>   
</div>
</div>
