@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Topic</h2>
        </div>
        <div class ="float-end">
          @if(Auth::user()->role->name=='teacher'){
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('topic.create',$subject->id)}}"> Create Topics</a>
          }
          @endif
  
  </div>
      </div>
        <br>
        <table class="table">
               <tbody>
            
              @foreach ($topics as $i=>$topic)
              
              <tr><td class="col-md-8"><h2>{{$i+1 }}{{' . '.$topic->topicname}}</h2></td>
              <td>
              <a href="{{ route('subtopic.index',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Subtopic</span></a>
              @if(Auth::user()->role->name=='teacher'){ 
              <a href="{{ route('topic.edit',$subject->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
              }
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
