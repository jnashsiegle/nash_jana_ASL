@extends('layouts.app')

	@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Shopping Lists</div>
                <div class="panel-body">
                    <p class="lead">Edit your list ></p>
<hr>
                    
                    



                    <a href="{{ route('lists.index') }}" class="btn btn-primary">Go back to lists</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection