<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                /* #636b6f */
                color: #ffffff;
                padding: 0 25px;
                font-size: 17px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* this is for the image  */
            .background {
                background-image: url("/assets/img1.jpg");
                height: 100vh;
                width: 100%;
                background-size: 100% 100%;
            }

            .top-left {
                position: absolute;
                left: 30px;
                top: 1px; 
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height background">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth

                   
                      {{-- <a href="{{ route('dashboard.index') }}">Dashboard</a> --}}
                    
                </div>
            @endif

                
            <div class="top-left" style="color:#ffffff;">
                Accounting System
            </div>

                 

            <div class="content">
              
                {{-- <div class="top-left title m-b-md" style="color:#ffffff;">
                    Accounting System
                </div> --}}
    
            </div>
        </div>
    </body>
</html>
