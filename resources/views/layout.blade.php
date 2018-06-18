<!doctype html>
<html>
<head>
    <title>Innovative Minds Survey tool</title>

    {{--TODO download import bootstrap--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row" style="padding-top:10px;">
            <div class="text-center">
                <a class="btn blue waves-effect waves-light lighten-1 white-text" href="/"> Home </a>
                @if(Auth::check())
                    <a class="btn" href="/logout"> Logout </a>
                    <a class="btn disabled" href="#" style="text-transform:none;">{{ Auth::user()->email }}</a>
                @else
                    <a class="btn" href="/login"> Login </a>
                    <a class="btn" href="/register"> Register </a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="text-center" style="padding-top:10px;">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
