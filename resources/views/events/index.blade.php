@extends('layouts.app')
 
@section('content')
    <div class="slider">
        <div>
            <img src="{{asset("img/conf-1.jpg")}}" alt="" class="img-responsive">
            <div class="slide-1">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis dolores eaque expedita, iure porro rem sint unde! Autem corporis ex facilis fuga harum in iure reiciendis tempore ut voluptate.</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-2.jpg")}}" alt="" class="img-responsive">
            <div class="slide-2">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque et facilis in laborum officiis porro, quae quas recusandae voluptas! Ab cumque eos ex ipsa mollitia officiis pariatur quo voluptatibus.</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-3.jpg")}}" alt="" class="img-responsive">
            <div class="slide-3">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab autem dolorem doloremque dolores est, harum, inventore ipsum, iusto laudantium modi molestiae omnis quis ratione repellat vero voluptas? Adipisci, necessitatibus?</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>

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
