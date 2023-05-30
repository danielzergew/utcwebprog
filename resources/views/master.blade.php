<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <style>
        /* html, body {
            height: 100%;
            margin: 0;
        } */

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
    </style>
    @yield('css')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    @yield('body')
</body>
</html>
