<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Subtopic;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
class SubtopicController extends Controller
{
    public function index(Subject $subject){
        $subtopics=Subtopic::orderBy('id','desc')->paginate('12');
        return view('admin.subtopic.index',compact('subject'));
    }
    public function create(Subject $subject){
        return view('admin.subtopic.create',compact('subject'));
    }
}
