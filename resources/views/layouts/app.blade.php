<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick/slick.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick/slick-theme.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/slider.css")}}"/>
    {{--JS--}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .events {
            text-align: center;
        }

        .right {
            text-align: right;
        }
    </style>
</head>
<body id="app-layout">
<div class="menu">
    <div class="container-fluid">
        <div class="barre-menu">
            <ul>
                <li class="logo"><a href="{{ url('/') }}"><img src="{{ asset("img/logo.png") }}" alt="" class="img-responsive"></a></li>
                <li class="search">
                    <form action="" class="formulaire">
                        <div class="cherche">
                            <label for="" class="chercher">
                                <i class="fa fa-search"></i>
                                <input class="champ" type="text" placeholder="   Mots-clés..."/>
                            </label>
                            <div class="selecteur">
                                <i class="fa fa-eye eye-selector"></i>
                                <select name="menu_destination" class="boutons selct">
                                    <option value="http://www.monsite.net/accueil.html">Accueil</option>
                                    <option value="http://www.monsite.net/apropos.html">Qui sommes-nous ?</option>
                                    <option value="http://www.monsite.net/contact.html">Nous contacter</option>
                                    <option value="http://www.monsite.net/plan.html">Plan du site</option>
                                </select>
                            </div>
                            <div class="recherche">
                                <button class="boutons rechrch" type="submit">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="co">
                        <a href="{{ url('/login') }}" class="connexion">
                            <p class="connex">Connexion / Inscription</p>
                        </a>
                    </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                <li class="help"><a href="{{ url('/help') }}">Aide</a></li>
            </ul>
        </div>
    </div>
</div>

    <div class="slider">
        <div>
            <img src="{{asset("img/conf-1.jpg")}}" alt="" class="img-responsive">
            <div class="slide-1">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>salut , consectetur adipisicing elit. A ab accusantium aliquid ea eum facilis ipsa ipsum laboriosam, molestias neque
                    , nihil nisi placeat quo recusandae repudiandae soluta totam ut vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores assumenda blanditiis, debitis deleniti dicta, doloribus earum enim eum explicabo fugit iure molestias obcaecati odio odit perspiciatis placeat rerum tenetur. </p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-2.jpg")}}" alt="" class="img-responsive">
            <div class="slide-1">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>salut , consectetur adipisicing elit. A ab accusantium aliquid ea eum facilis ipsa ipsum laboriosam, molestias neque
                    , nihil nisi placeat quo recusandae repudiandae soluta totam ut vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores assumenda blanditiis, debitis deleniti dicta, doloribus earum enim eum explicabo fugit iure molestias obcaecati odio odit perspiciatis placeat rerum tenetur. </p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-3.jpg")}}" alt="" class="img-responsive">
            <div class="slide-1">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>salut , consectetur adipisicing elit. A ab accusantium aliquid ea eum facilis ipsa ipsum laboriosam, molestias neque
                    , nihil nisi placeat quo recusandae repudiandae soluta totam ut vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores assumenda blanditiis, debitis deleniti dicta, doloribus earum enim eum explicabo fugit iure molestias obcaecati odio odit perspiciatis placeat rerum tenetur. </p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

            <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    {{--SLIDER SLICK.JS--}}

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset("slick/slick/slick.min.js")}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: '<img src="{{asset("img/prev.png")}}" alt="" class="slick-prev prev">',
                nextArrow: '<img src="{{asset("img/next.png")}}" alt="" class="slick-next next">',
            });
        });
    </script>
</body>
</html>
