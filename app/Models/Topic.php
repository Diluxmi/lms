<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $fillable=[
        'topicname',
        'content',
        'subject_id'

    ];
public function subject(){
    return $this->belongsTo(Subject::class, 'subject_id');
}  
}