@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Shopping Lists</div>
                <div class="panel-body">
                    <p class="lead">Here's a history of all your shopping lists. <a href="{{ route('lists.create') }}">Add a new one?</a></p>
<hr>
                    
                    <!--Display Existing Lists -->
                    
                    @foreach($lists as $list)
                        <h3>{{ $list->title }}</h3>
                        
                        <p>
                            <a href="{{ route('lists.show', $list->id) }}" class="btn btn-info">View List</a>
                            <a href="{{ route('lists.edit', $list->id) }}" class="btn btn-primary">Edit List</a>
                        </p>
                        <hr>
                    @endforeach



                    <a href="{{ route('lists.create') }}" class="btn btn-primary">Add New List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection