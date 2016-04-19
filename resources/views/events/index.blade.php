@extends('layouts.app')
 
@section('content')
    <div class="container-fluid">
        <div class="row h1event">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
                <div class="col-md-6">
                    <h1 class="eventstitle">LES TOP CONFÉRENCES</h1>
                </div>
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">
            @include('errors.message')

            @foreach($list as $event)
                <div class="col-md-3">
                    <div class="borderevent">
                        <div class="topevent">
                        <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                        </div>
                        <div class="bodyevent">
                            <h4><a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a>
                            <div class="clear-fix"></div></h4>
                            <div class="clearfix"></div>
                            {{ $event->content }}
                            <div class="clear-fix"></div>
                            <a href="{{ route('event.show', $event->id) }}" class="eventa">En savoir plus...</a>  
                        
                            <div class="clearfix"></div>
                        
                            <div class="placesevent"><i class="fa fa-user" aria-hidden="true"></i> Places: {{ $event->placesTaken }}/{{ $event->places }}</div>
                            <button class="btnevent">Participer</button>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach

            {!! $list->links() !!}
        </div>
        </div>
    </div>
@endsection

