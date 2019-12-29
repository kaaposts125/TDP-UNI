<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>TDP</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style type="text/css">
            @font-face {
                font-family: 'aileronlight';
                src: url('/fonts/Aileron-Light.otf');
                font-weight: normal;
                font-style: normal;
            }
            div {
                font-family: aileronlight;
            }
            nav {
                font-size: 120%;
            }
            div.content {
                font-size: 150%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar4">
                    <ul class="navbar-nav">
                        <li class="nav-item @if(Request::segment(2) == 'monday') active h4 @endif">
                            <a class="nav-link" href="monday">@lang('days.monday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'tuesday') active h4 @endif">
                            <a class="nav-link" href="tuesday">@lang('days.tuesday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'wednesday') active h4 @endif">
                            <a class="nav-link" href="wednesday">@lang('days.wednesday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'thursday') active h4 @endif">
                            <a class="nav-link" href="thursday">@lang('days.thursday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'friday') active h4 @endif">
                            <a class="nav-link" href="friday">@lang('days.friday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'saturday') active h4 @endif">
                            <a class="nav-link" href="saturday">@lang('days.saturday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'sunday') active h4 @endif">
                            <a class="nav-link" href="sunday">@lang('days.sunday')<span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="dropleft">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                                {{ Request::segment(1) == 'en' ? 'EN' : 'LV' }}
                            </a>        
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/{{ Request::segment(1) == 'en' ? 'lv' : 'en' }}/{{Request::segment(2)}}">{{ Request::segment(1) == 'en' ? 'LV' : 'EN' }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 px-0">
                            <img src="/storage/@lang('days.'.Request::segment(2)).jpg" alt="sad sounds" class="img-responsive img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-4 mx-4 py-4">
                            @lang('days.'.Request::segment(2).'-text')
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center bg-dark text-white-50 py-4 container-fluid">
            <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    @lang('info.footer-creator')
                </div>
                <div class="col-md-3">
                    @lang('info.footer-webpage')
                </div>
                <div class="col-md-3"></div>
            </div>
        </footer>
    </body>
</html>
