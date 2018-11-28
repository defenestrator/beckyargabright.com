<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #313a33;
                color: #faf3ff;
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
                font-size: 48px;
            }

            .links > a {
                color: #faf3ff;
                padding: 0 4px;
                font-size: 12px;
                font-weight: 300;
                letter-spacing: .05rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-bottom: 30px;
            }
            .address > a {
                color: #90d0fa;
                font-size: 13px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 16px;
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
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <div style="margin-top:12px; padding-top:12px;"><img style="width:50%;" title="Becky Argabright, Massage Therapy" alt="Becky Argabright, Massage Therapy" src="/images/becky-logo.png"></div>
                    <div>{{ config('app.name') }}</div>
                </div>
                <div class="address" style="margin-bottom:20px;">
                    <a href="#address">1412 W. Washington St.<br>Boise, ID 83702</a><br><a href="tel:12083715719">1 (208) 371-5719</a>
                </div>
                <div class="links" style="margin-bottom:24px;">
                    <a href="#">Deep Tissue</a>
                    <a href="#">Aromatherapy</a>
                    <a href="#">Hot Stones</a>

                </div>
            </div>
        </div>
    </body>
</html>
