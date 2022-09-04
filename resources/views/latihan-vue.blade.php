<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            body {
                font-family: sans-serif,
                margin: 15%
            }
        </style>
    </head>
    <body>
        <div id="app">
            <header-component></header-component>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
