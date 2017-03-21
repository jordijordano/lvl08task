@extends('layouts.master')
@section('titlePage')
Tasks Show
@stop
@section('header')
	<h2>Tasks Show</h2>
	

@stop
@section('content')

	<h3>This is my /resources/views/tasks/show.blade.php file!</h3>
	
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Id project</h4>
    <h3 class="list-group-item-text">{{$task->project_id}}</h3>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Name</h4>
    <h3 class="list-group-item-text">{{$task->name}}</h3>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Slug</h4>
    <h3 class="list-group-item-text">{{$task->slug}}</h3>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Completed</h4>
    <h3 class="list-group-item-text">{{$task->completed}}</h3>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Description</h4>
    <h3 class="list-group-item-text">{{$task->description}}</h3>
  </a>

</div>

{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $task->project_id, $task->id))) !!}
     <div class="btn-group" role="group" >
    {!! link_to_route('projects.tasks.edit', 'Edit', array($task->project_id, $task->id), array('class' => 'btn btn-info')) !!}
    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
     </div>
                        
{!! Form::close() !!}

@stop
@section('footer')
<h3>App development</h3>
@stop