@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                @if(Auth::check())
                <?php $user = Auth::user(); ?>
                @endif

                    <h4>Welcome {{ Auth::user()->name }}, your listed email is {{ Auth::user()->email }}.
                    <hr />
                    <p>What would you like to do today &quest;</p>
                    <p><a href = "{{ url('lists') }}"">Create a new shopping list.</a></p>




                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
