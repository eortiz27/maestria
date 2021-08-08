<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WiEstate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><i class="fas fa-home"></i>Inicio</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-users-cog"></i>Acceder</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fas fa-id-card"></i>Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="https://3.bp.blogspot.com/-2IQXWwprOGU/XL99j6VJBsI/AAAAAAABO5s/KYyzMgxykaEb3uuKLSZGZnYsHll8vRcYwCLcBGAs/s1600/universidad-de-huanuco-logo.jpg" alt="">
                
                <div class="title m-b-md">
                      <b>Curso de Ciencia de Datos </b>
                </div>
                <div class="h1" style="color: #474749; font-size: 20pt"><b>Docente:</b></div>
                <div class="h1" style="color: #030307; font-size: 16">- Freddy Clayderman Virgilio Arratea</div>
                <br>
                <div class="h1" style="color: #474749; font-size: 20pt"><b>Integrantes:</b></div>
                <div class="h1" style="color: #030307; font-size: 16">- Einstein Arnold Ortiz Morales</div>
                <div class="h1" style="color: #030307; font-size: 16">- Elkin Fausto Ortiz Morales</div>
            </div>
        </div>

        
        {{-- Particulas --}}
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    </body>
</html>
