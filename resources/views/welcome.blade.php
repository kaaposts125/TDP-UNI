<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TDP</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $('.navbar-nav .nav-link').click(function(){
                $('.navbar-nav .nav-link').removeClass('active');
                $(this).addClass('active');
            })
        </script>
        <style>
            .column {
            float: left;
            width: 50%;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
        }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                        <li class="nav-item @if(Request::segment(2) == 'monday') active h5 @endif">
                            <a class="nav-link" href="monday">@lang('days.monday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'tuesday') active h5 @endif">
                            <a class="nav-link" href="tuesday">@lang('days.tuesday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'wednesday') active h5 @endif">
                            <a class="nav-link" href="wednesday">@lang('days.wednesday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'thursday') active h5 @endif">
                            <a class="nav-link" href="thursday">@lang('days.thursday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'friday') active h5 @endif">
                            <a class="nav-link" href="friday">@lang('days.friday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'saturday') active h5 @endif">
                            <a class="nav-link" href="saturday">@lang('days.saturday')<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item @if(Request::segment(2) == 'sunday') active h5 @endif">
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
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/storage/@lang('days.'.Request::segment(2)).jpg" alt="sad sounds" class="img-responsive img-fluid" />
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
        <footer class="page-footer font-small footer-copyright text-center py-3 ">
            <div class="row footer-copyright text-center py-3 ">
                <div class="column">
                    @lang('info.footer-creator')
                </div>
                <div class="column">
                    @lang('info.footer-webpage')
                </div>
            </div>
        </footer>
    </body>
</html>
