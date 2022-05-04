<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'grade',
        'section',
        'phonenumber',
        'address',
        'index_no',
        

       
    ];
    protected $appends =[
    'grade_section',

    ];
    public function user(){
        
        return $this->hasOne(User::class,'student_id');
    }
    public function exam(){
        return $this->hasOne(Exam::class,'exam_id');
    }
    public function assessment(){
        return $this->hasOne(Assessment::class,'assessment_id');
    }
    public function getGradeSectionAttribute(){
        return $this->grade.$this->section;

    }
}
