<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>UFT</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">




        <!-- Styles -->
        <style>
            html, body {
                background-image: url('../images/ug.jpg');
                background-size: 700px 650px;
                background-repeat:no-repeat;
                background-position:left;
                background-color:black;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
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

                margin-left:800px;
            }

            .title {
                font-size: 200px;
                font-weight:bold;


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
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                        <a href="{{ route('login') }}"><u>Login</u></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><b><u>Register</u></b></a>

                        @endif
                    @endauth
                </div>
           @endif

            <div class="content">
                <div class="title m-b-md">

                    UFT
                    <div class="links" style="font-size:25px">
                        <p><b>UNITED FRONT FOR TRANSFORMATION POLITICAL PARTY</b></p>

                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
