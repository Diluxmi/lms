<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=[
        'subject',
        'grade',
        'section',
        'created_by',

    ];
    protected $appends =[
        'grade_subject'
    ];
    
     public function getGradeSubjectAttribute(){
        return $this->grade." ".$this->subject;//concatate grade and subject
            }
            public function teacher(){
                return $this->belongsToMany(Teacher::class,'teacher_id');
            }
                public function topic(){
                    return $this->hasOne(Topic::class,'topic_id');
                    }


        }
    
    

