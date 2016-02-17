@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">It's Shopping Day!</div>
                <div class="panel-body">
					<h1>{{$list->title}}</h1>
					<p class="lead">{{ $list->description }}</p>
					


@stop