@extends('layouts.master')
@section('titlePage')
Tasks Edit
@stop
@section('header')
	<h2>Tasks Edit</h2>
	

@stop
@section('content')

	<h3>This is my /resources/views/tasks/edit.blade.php file!</h3>
	
{!!Form::model($task, ['method'=>'PATCH', 'route'=>['projects.tasks.update', $projectid, $task->id]])!!}
 
	<div class="form-group">
	    {!! Form::label('project_id', 'Project Id:') !!}
	    {!! Form::label($projectid, 'Project Id:') !!}
	</div>
	<div class="form-group">
	    {!! Form::label('id', 'Task Id:') !!}
	    {!! Form::text('id',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::label('name', 'Name:') !!}
	    {!! Form::text('name',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::label('slug', 'Slug:') !!}
	    {!! Form::text('slug',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::label('completed', 'Completed:') !!}
	    {!! Form::text('completed',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::label('description', 'Description:') !!}
	    {!! Form::text('description',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
	</div>

{!!Form::close()!!}
@stop
@section('footer')
<h3>App development</h3>
@stop