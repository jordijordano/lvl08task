@extends('layouts.master')
@section('titlePage')
Project Home
@stop
@section('header')
<h2>Projects Home</h2>
@stop
@section('content')

<h3>This is my /resources/views/projects/index.blade.php file!</h3>
@if(!$projects->count())
	No projects
@else
	<ul>
	@foreach($projects as $project)
		<li><a href="{{route('projects.show', $project->id)}}">Id project: {{$project->id}}</a></li>
		<ul>
			<li>Name:{{$project->name}}</li>
			<li>Slug:{{$project->slug}}</li>
			<li>Created at:{{$project->created_at}}</li>
		</ul>
	@endforeach
	</ul>
@endif	
{!! link_to_route('projects.create', 'Add New Project', array(), array('class' => 'btn btn-info')) !!}

@stop
@section('footer')
<h3>App development</h3>
@stop
