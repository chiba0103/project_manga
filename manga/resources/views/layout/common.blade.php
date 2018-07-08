<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href='add/css/fullcalendar.css' rel='stylesheet' />
        <link href='add/css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <link href="add/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src='add/jquery/moment.min.js'></script>
        <script src='add/jquery/jquery.min.js'></script>
        <script src='add/calendar/fullcalendar.min.js'></script>
        <script src='add/calendar/ja.js'></script>
        <script src="add/bootstrap/js/bootstrap.min.js"></script>
        @yield('script')
    </head>
    <body>


    <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample10">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                マンガ発売日カレンダー
            </a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarEexample10">
            <ul class="nav navbar-nav">
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="row">
        <div class="col-sm-9">
            @yield('content')
        </div>

        <div class="col-sm-3">
            
        </div>


    </div>
    </body>
</html>