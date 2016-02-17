@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Shopping Lists</div>
                <div class="panel-body">
                    <h1>Welcome Home</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
                    <hr>

                    <a href="{{ route('lists.create') }}" class="btn btn-primary">Add New List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection