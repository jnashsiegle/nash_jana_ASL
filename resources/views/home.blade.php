@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Grocery Lists</div>

                <div class="panel-body">
                @if(Auth::check())
                <?php $user = Auth::user(); ?>
                @endif
                    You are logged in as {{ Auth::user()->name }}.
                    <div>
                    <h4>Your name is {{Auth::user()->name }} </h4>
                    <h4>Your email is {{Auth::user()->email }} </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
