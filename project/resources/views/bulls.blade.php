<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-image: url(https://unofficialathletic.com/wp-content/uploads/2017/08/NBA2017_bulls_primary.jpg);
                color: white;
                background-position: center;
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            .title {
                font-size: 100px;   
            }

            .links {
                font-size: 40px;
            }

            a {
                margin-left: 20px;
                color: white;
            }

            a:hover {
                color: blue;
            }

        </style>
    </head>
    <body>
            <div class="content">
                <div class="title">
                    {{ $title }}
                </div>

                <div class="links">
                   <a href=" {{ route('home') }}" >Home</a>
                   <a href=" {{ route('lakers') }}" >Lakers</a>
                   <a href=" {{ route('bulls') }}" >Bulls</a>
                   <a href=" {{ route('celtics') }}" >Celtics</a>
                </div>
            </div>
        </div>
    </body>
</html>
