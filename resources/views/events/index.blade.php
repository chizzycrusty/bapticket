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
    <div class="container">
        <div class="separator">
            <img src="{{asset("img/barre-noir.png")}}" alt="" class="img-responsive">
            <div class="top-conf">
                <h2>LES TOP CONFERENCES</h2>
            </div>
        </div>
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