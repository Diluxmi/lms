<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubTopicStoreRequest;
use App\Http\Requests\Admin\SubTopicUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\role;
use App\Models\SubTopic;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
class SubtopicController extends Controller
{
    public function index( Subject $subject,Topic $topic){
         $subtopics=SubTopic::where('topic_id',$topic->id)->orderBy('id','desc')->paginate('12');
         $roles = Role::where('name','==','teacher')->pluck('name','id')->toArray();
        return view('admin.subtopic.index',compact('subject','topic','subtopics','roles'));
    }
    
    public function create( Subject $subject,Topic $topic){
       return view('admin.subtopic.create',compact('subject','topic'));
   } 

   public function store(SubTopicStoreRequest $request,  Subject $subject,Topic $topic){
    $data = $request->validated();
    $file = $request->file('filename');
    $name = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    if($request->has('filename')){
        $path=$request->file('filename')->store('notes','public');
    }
     $subtopic=SubTopic::create([
       
        'subtopicname' => $data['subtopicname'],
        'content' => $data['content'],
        'filename' => $path,
        'actual_filename' => $name,
        'extension'=>$extension,
        'topic_id'=>$topic->id,
    ]);
    return redirect()->route('subtopic.index', [$subject->id,$topic->id])->with('success', 'Subtopic has been created successfuly!');
}

public function show(Subject $subject,Topic $topic,SubTopic $subtopic){
    
   $pathToFile = storage_path('app/myfiles/' . $subtopic->filename);
    
    return response()->file($pathToFile,['Content-Type', 'application/pptx']);
  
   
}

public function download(Subject $subject,Topic $topic,SubTopic $subtopic){
    
    $pathToFile = storage_path('app/myfiles/' . $subtopic->filename);
    return response()->download($pathToFile,$subtopic->actual_filename);
   
   
   
}

   

   public function edit(Subject $subject,Topic $topic,SubTopic $subtopic){
       return view('admin.subtopic.edit',compact('subject','topic','subtopic'));
   }
   public function update(Subject $subject,Topic $topic,SubTopic $subtopic,SubtopicUpdateRequest $request){
       $data=$request->validated();
        $subtopic->update($data);
    return view('admin.subtopic.edit',compact('subject','topic','subtopic'));
}

   public function delete(Subject $subject,Topic $topic,SubTopic $subtopic){
       return view('admin.subtopic.delete',compact('subject','topic','subtopic'));
   }

   public function destroy(Subject $subject,Topic $topic,SubTopic $subtopic){
       $topic->delete();
       return redirect()->route('subtopic.index',$subject->id,$topic->id, $subtopic->id)->with('success', 'subtopic has been deleted successfuly!');
   }
}
