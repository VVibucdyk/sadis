<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="{{ asset('img/fav.png') }}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #444444;
                color: #FFFFFF;
                font-family: 'Raleway', sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-family: 'Roboto Condensed',sans-serif;
                font-size: 12px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #loading {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: white;
            }
        </style>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/myScript.js') }}"></script>   
    </head>
    <body>
        <div id="loading">Mohon tunggu....</div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   <!-- <font color="#22CC99">S</font>istem <font color="#22CC99">A</font>bsensi <font color="#22CC99">D</font>igital <font color="#22CC99">S</font>ekolah -->
                   <img src="{{asset('img/logo_SADIS.png')}}" width="700">
                </div>

                <div class="links">
                    <a href="/absen">Data absen</a>
                    <a href="/siswa">Data siswa</a>
                </div>
            </div>
        </div>
    </body>
</html>
