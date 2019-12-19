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
                            <a class="nav-link" href="/pirmdiena">Pirmdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/otrdiena">Otrdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/trešdiena">Trešdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ceturdiena">Ceturdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/piektidena">Piektdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sestdiena">Sestdiena<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/svetdiena">Svētdiena<span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            </div>
            <div class="content">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/storage/@lang('days.'.Request::segment(2)).jpg" alt="placeholder 960" class="img-responsive img-fluid" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 mt-4 mx-2">
                            <p>
                                @lang('days.'.Request::segment(2).'-text')
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
