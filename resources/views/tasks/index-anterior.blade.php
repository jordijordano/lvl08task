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
	No tasks
@else
	<ul>
	@foreach($tasks as $task)
		<li><a href="{{route('projects.tasks.show', $task->id)}}">Id task: {{$task->id}}</a></li>
		<ul>
			<li>Name:{{$task->name}}</li>
			<li>Slug:{{$task->slug}}</li>
			<li>Completed:{{$task->completed}}</li>
			<li>Description:{{$task->description}}</li>
			<li>Created at:{{$task->created_at}}</li>
		</ul>
	@endforeach
	</ul>
@endif	


@stop
@section('footer')
<h3>App development</h3>
@stop
