<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @livewireStyles
    <style>
        body{
            overflow-x: hidden;
        }
        section{
            padding: 60px 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
    @include('navbar')
    @yield('content')
    @include('footer')

    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>