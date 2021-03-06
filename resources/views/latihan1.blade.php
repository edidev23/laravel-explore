<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPA Laravue</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: sans-serif;
            margin: 15%;
        }

    </style>
</head>

<body>

    <div id="app">
        <header-component></header-component>
        <h1>Hello, @{{ title}}</h1>

        <router-view></router-view>

        <footer-component></footer-component>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
