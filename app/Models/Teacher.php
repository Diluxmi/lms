<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'grade_id',
        'qualification',

       
    ];
    public function users(){
return $this->hasOne(User::class,'teacher_id');

    }
}
