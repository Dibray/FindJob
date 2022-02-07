<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/app.css">

        <title>Find Job</title>
    </head>

    <body class="antialiased">
        <div class="menu">
            <div class="site">
                FJ
            </div>

            <div class="home">
                <a href="{{ route('home') }}">Home</a>
            </div>
<!--
            <div class="account">
                <a href="{{ route('account') }}">Account</a>
            </div>-->
        </div>
    </body>

</html>
