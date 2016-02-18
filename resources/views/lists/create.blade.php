@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Creation Station!</div>
                <div class="panel-body">
					<h1>Let's go shopping!</h1>
					<h2>Add a new list</h2>
					<p class="lead">Add to your shopping list below.</p>
					<hr>
					<!--check for errors in our form with the following: -->
					@include('partials.alerts.errors')

					<!--Success flash message -->
					@if(Session::has('flash_message'))
					    <div class="alert alert-success">
					        {{ Session::get('flash_message') }}
					    </div>
					@endif

					<!--End error check -->

					<!--Form for creating lists -->
					{!! Form::open(['route' => 'lists.store']) !!}

					<div class="form-group">
					    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
					    {!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
					    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
					    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
					</div>

					{!! Form::submit('Save List', ['class' => 'btn btn-primary']) !!}

					{!! Form::close() !!}

@stop