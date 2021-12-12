<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'grade',
        'section',
        'qualification',
        'phonenumber',
        'address',
        'experience',
        'qualification',
        'appointmentyear',
      
       
    ];
    public function user(){
return $this->hasOne(User::class,'teacher_id');

    }
}
