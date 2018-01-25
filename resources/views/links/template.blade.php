<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/style">
        <title>PIN IT</title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
        {!! Html::style('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') !!}
        {!! Html::style('http://getbootstrap.com/dist/js/bootstrap.min.js') !!}
     </head>
     <style> textarea { resize: none; } </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>