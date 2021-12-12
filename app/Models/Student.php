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
    public function user(){
        
        return $this->hasOne(User::class,'student_id');
    }
}
