<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        @auth
            <header-component 
                :auth-flg="true"
            ></header-component>
        @else
            <header-component
                :auth-flg="false"
            ></header-component>
        @endauth

        @yield('body')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>