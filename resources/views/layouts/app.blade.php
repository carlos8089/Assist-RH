<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Assist-RH') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Assist-RH') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
            @else
            <li class="nav-item dropdown">
                
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <style>
                        #logout{
                            text-align: center;
                        }
                        #profile{
                            text-align: center;
                        }
                    </style>
                    <a id="profile" class="nav-link text-secondary" href="{{ route('profil') }}">@lang('<strong>Mon profil</strong>')</a>
                    <a id="logout" class="nav-link text-danger" href="{{ route('logout') }}">@lang('<strong>Déconnexion</strong>')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                    
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>

<footer class="bg-light text-primary">
        <style>
            footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
           
            text-align: center;
            color: rgb(253, 253, 253);
        }
        </style>
        @copyright COOPECFI 2019
        
</footer>

@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>
</body>
</html>