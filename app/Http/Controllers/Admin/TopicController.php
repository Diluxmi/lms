<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TopicStoreRequest;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
class TopicController extends Controller
{
 public function index(Subject $subject){
     $topics=Topic::orderBy('id','desc')->paginate('12');
     return view('admin.topic.index',compact('subject','topics'));
 }
 public function create(Subject $subject){
   
     $roles= Role::where('name','==','teacher')->pluck('name','id')->toArray();
    return view('admin.topic.create',compact('subject'.'roles'));
} 
public function store(Subject $subject,TopicStoreRequest $request){
    $data = $request->validated();
  
        $topics= Topic:: create([
            'topicname'=>$data['topicname'],
            'subject_id'=>$subject->id,
        ]);
           
       
 return redirect()->route('topic.index',$subject->id)->with('success','Topic create succesfull');
}
public function edit(Subject $subject){
    return view('admin.topic.edit',compact('subject'));
}
public function delete(Subject $subject){
    return view('admin.topic.delete',compact('subject'));
}
public function destroy(Subject $subject){
    $subject->delete();
    return redirect()->route('topic.index',$subject->id)->with('success', 'topic has been deleted successfuly!');
}


}