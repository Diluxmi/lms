<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'section',
        'grade',
        'subject_id',
        

       
    ];
    protected $appends =[
    'grade_section',

    ];
   
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
