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
                    You are logged in as {{ Auth::user()->email }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
