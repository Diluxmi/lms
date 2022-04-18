<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subtopics extends Model
{
    use HasFactory;
    protected $fillable=[
        'subtopicname',
        'content'
    ];
    public function topic(){
        return $this->belongsTo(Topic::class, 'topic_id');
    }
}
