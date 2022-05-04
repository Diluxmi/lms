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
          @if(Auth::user()->role->name=='Teacher')
    <a class="btn btn-primary btn-icon-spilt" href ="{{ route('topic.create',$subject->id)}}"> Create Topic</a>
          
          @endif
  
  </div>
      </div>
        <br>
        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        <table class="table">
               <tbody>
            
              @foreach ($topics as $i=>$topic)
              
              <tr><td class="col-md-8"><h2>{{$i+1 }}{{' . '.$topic->topicname}}</h2></td>
              <td>
              <a href="{{ route('subtopic.index',$subject->id)}}" class="btn btn-primary"><span class="text">Subtopic</span></a>
             
              <a href="{{ route('topic.edit',$subject->id)}}" class="btn btn-dark"><span class="text">Edit</span></a>
              
              
              </td>
              </tr>
              @endforeach 
                </tbody>
                
            </table>
</div>
      </div>
      </div>
      </div>

               @endsection
