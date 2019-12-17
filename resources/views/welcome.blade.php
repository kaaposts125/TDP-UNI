<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TDP</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div>
            <nav class="navbar navbar-expand-md navbar-dark bg-info">
                <a href="/" class="navbar-brand">Brand</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar4">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="//codeply.com">Codeply</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>

            </div>
            <div class="content">
                @yield('text')
                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div>
    </body>
</html>
