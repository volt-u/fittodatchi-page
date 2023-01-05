<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        {{-- Bootstrap --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/web.css')}}">
    </head>
    <body class="body-dimension">
        <header style="background-color: rgb(248, 169, 169)">
            <div>
                <h2>MASTER HEAD PAGE</h2>
                <p>Include the top nav part </p>
            </div>
        </header>
        <div class="container" id="main" style="background-color: rgb(248, 248, 149)">
            <h2>MASTER BODY PAGE</h2>
            @yield('content')
        </div>
        <footer style="background-color: rgb(248, 169, 169)">
            <div class="container">
                <div class="lndfooter">
                    <h2>MASTER FOOT PAGE</h2>
                </div>
            </div>
        </footer>
    </body>
</html>
