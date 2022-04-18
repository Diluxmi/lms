@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left">
          <h2> Sub Topic</h2>
        </div>
        <div class ="float-right">
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('subtopic.create',$subject->id)}}"> Create SubTopics</a>
        </div>
      </div>
</br>
<table class="table">
               <tbody>
            
              @foreach ($subtopics as $i=>$subtopic)
              
              <tr><td class="col-md-8"><h2>{{$i+1 }}{{' . '.$subtopic->topicname}}</h2></td>
              <td>
              
                <a href="{{ route('topic.edit',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                <a href="{{ route('topic.delete',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
              </td>
              </tr>
              @endforeach 
                </tbody>
                
            </table>      
      </div>
      </div>
      </div>

               @endsection
