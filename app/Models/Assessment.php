<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assessment extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'grade',
        'section',
        'index_no',
        'subject',
        'paper_upload',
        'answer_upload',
        'result',

       
    ];
    protected $appends =[
    'grade_section',

    ];
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
