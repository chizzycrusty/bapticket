@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Êtes-vous participant ou organisateur ?</div>

                <div class="panel-body">
                    <a href="{{ url('/register') }}">User</a>
                    <br>
                    <a href="{{ url('/registerorga') }}">Orga</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
