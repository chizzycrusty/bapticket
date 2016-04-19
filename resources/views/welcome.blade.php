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
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
