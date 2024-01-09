<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Save_likes</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    </head>
    <body class="antialiased">
        <div class="top-page">
            <h1 class="title">Save_likes</h1>
            @if (Route::has('login'))
                <div class="top-text">
                    @auth
                        <a href="{{ url('/timeline') }}" class="hometext">TimeLine</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="logintext">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="registertext">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                
        </div>
    </body>
</html>
