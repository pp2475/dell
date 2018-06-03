<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'dell') - Laravel 新手入门教程</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@include('layouts._header')

    <div class="container-fluid">
        <div class="col-xs-offset-1 col-xs-10 text-left">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>