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
    <body class="d-flex flex-column h-100">
        <div id="app">
            <header>
                <header-component></header-component>
            </header>

            <main class="flex-shrink-0 pt-5 mt-5 mb-5">
                <router-view></router-view>
            </main>

            <footer class="footer mt-auto py-3 border-top">
                <footer-component></footer-component>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
