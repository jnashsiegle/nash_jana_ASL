@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">It's Shopping Day!</div>
                <div class="panel-body">
					<h1>{{$list->title}}</h1>
					<p>{{$list->shopping_date}}</p>
					<p class="lead list">{{ $list->description }}</p>

					
					<a href="{{ route('lists.edit', $list->id) }}" class="btn btn-primary pull-left">Edit List</a>
					<a href="{{ route('lists.index') }}" class="btn btn-info pull-left">Back to all lists</a>
				

				<div class="col-md-2 pull-right">
			    {!! Form::open(['method' => 'DELETE', 'route' => ['lists.destroy', $list->id]]) !!}
            	{!! Form::submit('Delete this list?', ['class' => 'btn btn-danger']) !!}
        		{!! Form::close() !!}
		 		</div>

			</div>
			
		</div>
	</div>
</div>
					


@stop