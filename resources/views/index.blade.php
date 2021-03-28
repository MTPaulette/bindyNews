<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('pagecss')
    @yield('titre')
    <!--title>accueil</title-->
</head>
<body>
    <div class="container-fluid" id="app">
        @yield('menu')
        @yield('contenu')
        @yield('pagejs')
        @yield('footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>