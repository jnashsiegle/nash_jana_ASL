@extends('layouts.app')

	@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Mode</div>
                <div class="panel-body">
    <hr />
                    
                        <h1>Editing {{$list->title}} </h1>
                        <p class="lead">Edit to save this list below, or <a href = "{{ route('lists.index') }}">go back to all lists.</a> </p>
                        <hr>

                        <!--beginning error check -->
                        @include('partials.alerts.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                            </div>
                        @endif
                        
                        {!! Form::model($list, ['method' => 'PATCH',
                            'route' => ['lists.update', $list->id]
                        ]) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group">
                        {!! Form::label('shoppingDate', 'Shopping Date:', ['class' => 'control-label']) !!}
                        {!! Form::text('shoppingDate', null, array('id' => 'datepicker')) !!}
                    </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Update List', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}


                        <div class="col-md-2 pull-right">
                {!! Form::open(['method' => 'DELETE', 'route' => ['lists.destroy', $list->id]]) !!}
                {!! Form::submit('Delete this list?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </div>



                    <a href="{{ route('lists.index') }}" class="btn btn-primary pull-right">Go back to lists</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection