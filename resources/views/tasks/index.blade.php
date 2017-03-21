@extends('layouts.master')
@section('titlePage')
Tasks Home
@stop
@section('header')
<h2>Tasks Home</h2>
@stop
@section('content')

<h3>This is my /resources/views/tasks/index.blade.php file!</h3>


@if(!$tasks->count())
    <div class="flash alert-danger">
    	<h4>  No tasks</h4>
    	<h5>{!! link_to_route('projects.tasks.create', 'Create Task', $projectid) !!}</h5>          
    </div>		
@else
<h3>Project Id:{{$projectid}}</h3>
<h3># Task: {{$tasks->count()}}</h3>
<hr>
	<ul>
	@foreach($tasks as $task)
		<li><a href="{{route('projects.tasks.show', [$task->project_id, $task->id])}}">Id task: {{$task->id}}</a></li>
		<ul>
			<li>Name:{{$task->name}}</li>
			<li>Slug:{{$task->slug}}</li>
			<li>Completed:{{$task->completed}}</li>
			<li>Description:{{$task->description}}</li>
			<li>Created at:{{$task->created_at}}</li>
			<li>Project Id:{{$task->project_id}}</li>
		</ul>
	@endforeach
	</ul>
	
	{!! link_to_route('projects.tasks.create', 'Create Task', $task->project_id, array('class' => 'btn btn-info')) !!}
	{!! link_to('projects', $title = 'Home', $attributes = array(), $secure = null) !!}
@endif	


@stop
@section('footer')
 
    </p>
<h3>App development</h3>
@stop
