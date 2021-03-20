<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">

    <title>accueil</title>
</head>
<body>
    <div class="container">
        <div class="pub1"></div>
        <nav class="navbar navbar-light bg-light navbar-expand-lg">
            <a href="#" class="navbar-brand"></a>
            
            <!--recherche-->
            <form action="" class="form-inline">
                <input type="search" class="form-contol mr-sm-2" placeholder="search" aria-label="search">
                <span class="glyphicon glyphicon-search"></span>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">recherche</button>
            </form>
            <!--bouton pour petit ecran-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--elmts du menu-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Notification</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Favoris</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Mon compte</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Nous contacter</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Accueil</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>