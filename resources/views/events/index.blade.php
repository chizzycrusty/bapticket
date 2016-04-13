@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row">
        @include('errors.message')
            @foreach($list as $event)
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="events panel-body">
                            <img class="img-responsive" src="{{asset("img/conference.jpg")}}" alt="conf">
                            <div class="clear-fix"></div>
                            <a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a>
                            <div class="clear-fix"></div>
                            {{ $event->content }}
                            <div class="clear-fix"></div>
                            <a href="{{ route('event.show', $event->id) }}">En savoir plus...</a>
                        </div>
                        <div class="panel-footer">
                            <i class="fa fa-user" aria-hidden="true"></i> Places: {{ $event->places }}

                            <button class="right">Participer</button>

                        </div>
                    </div>
                </div>
            @endforeach
            {!! $list->links() !!}
        </div>
    </div>
@endsection