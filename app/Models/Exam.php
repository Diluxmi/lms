<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'section',
        'grade',
        'subject_id',
        'student_id',
        

       
    ];
 
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    
    public function student(){
        return $this->belongsTo(Student::class,'subject_id');
    }
}
