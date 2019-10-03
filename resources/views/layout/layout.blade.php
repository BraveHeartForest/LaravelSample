<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset ('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('/css/app.css')}}">
</head>
<body>
    <div class="mt-5 container">
    <div class="text-center">
        <img src="{{asset('img/logo.png')}}" alt="ロゴ">
    </div>
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{asset('/js/jquery-3.4.0.min.js')}}"></script>
    <script>
        {{--@yield('script')--}}
        //ここに自作のscriptを書く
    </script>
</body>
</html>