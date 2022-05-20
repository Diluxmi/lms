@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
        <a href="{{route('topic.index',[$subject->id])}}" class="float-left btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold"></i></a>
          <h2> Sub Topic</h2>
        </div>
        <div class ="float-end">
        @if(Auth::user()->role->name=='Teacher')
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('subtopic.create',[$subject->id,$topic->id])}}"> Create SubTopics</a>
  @endif      
  </div>
</div>
</br>
<table class="table">
               <tbody>
            
              @foreach ($subtopics as $i=>$subtopic)
              
              <tr>
               
                <td class="col-md-8"><h2>{{$i+1 }}{{' . '.$subtopic->subtopicname}}</h2></td></tr>
              <tr>
              <td class="col-md-12">{{$subtopic->content}}</td> 
              </tr>
              <tr>
              <td class="col-md-10">{{$subtopic->filename}}</td> 
              @if(Auth::user()->role->name=='Teacher')
              <td class="btn btn-dark"> <a href="{{ route('subtopic.show',[$subject->id,$topic->id,$subtopic->id])}}"><span class="text">Show</span></a></td>
              @endif
              @if(Auth::user()->role->name=='Student')
              <td class="col-md-2"> <a href="{{ route('subtopic.download',[$subject->id,$topic->id,$subtopic->id])}}"><i class="mdi mdi-account-circle"></i><span class="text">Download</span></a></td>
              @endif
              </tr>
            <tr>
              <td>
              @if(Auth::user()->role->name=='Teacher')
                <a href="{{ route('subtopic.edit',[$subject->id,$topic->id,$subtopic->id])}}" class="btn btn-dark"><span class="text">Edit</span></a>
                <a href="{{ route('subtopic.delete',[$subject->id,$topic->id,$subtopic->id])}}" class="btn btn-danger"><span class="text">Delete</span></a>
                @endif
              </td>
              </tr>
              @endforeach 
                </tbody>
                
            </table>      
      </div>
      </div>
      </div>


               @endsection
