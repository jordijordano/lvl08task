@extends('layouts.master')
@section('titlePage')
Project Create
@stop
@section('header')
	<h2>Projects Create</h2>
	

@stop
@section('content')

	<h3>This is my /resources/views/projects/create.blade.php file!</h3>
	
{!!Form::open(array('url'=>'projects'))!!}
	<div class="form-group">
	    {!! Form::label('name', 'Name:') !!}
	    {!! Form::text('name',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::label('slug', 'Slug:') !!}
	    {!! Form::text('slug',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
	</div>

{!!Form::close()!!}


@stop
@section('footer')
<h3>App development</h3>
@stop