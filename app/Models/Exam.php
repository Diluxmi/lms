<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'subject',
        'result',
        'student_id',

       
    ];
 
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
