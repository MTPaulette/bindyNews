<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/essai.css') }}">
    <title>accueil</title>
</head>
<body>
    <div class="container-fluid" id="app">

        <div class="row menu fixed">
            <nav class="col navbar navbar-light bg-light navbar-expand-lg">
                <!--div class="col-sm-1 logo"></div-->
                <a href="#" class="col-sm-1 logo navbar-brand" style="background-color: blueviolet">logo</a>
                <!--recherche-->
                <div class="col-sm-3 ml-auto input-group recherche" style="background-color: rgb(248, 245, 83)">
                    <form action="" class="form-outline">
                        <input type="search" id="search-focus" class="form-control" placeholder="search">
                    </form>
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
                <!--bouton pour petit ecran-->
                <div class="">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!--elmts du menu-->
                <div class="col-sm-6 ml-auto collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                                </svg>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                </svg>
                                <span>Notification</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                                <span>Favoris</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <span>Mon compte</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                <span>Nous contacter</span>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> 
        </div>
        
        <div class="row">
           <div class="col qlqCategorie">
                <!--ul>
                    <li><a href="#">categorie 0</a></li>
                    <li><a href="#">categorie 1</a></li>
                    <li><a href="#">categorie 2</a></li>
                    <li><a href="#">categorie 3</a></li>
                    <li class="dropdown">
                        <span class="dropdown-toggle" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                        </span>
                        <div class="dropdown-menu troisPoints">
                            <a href="#">Notification 0</a>
                            <a href="#">Notification 1</a>
                            <a href="#">Notification 2</a>
                            <a href="#">Notification 3</a>
                        </div>
                    </li>
                </ul-->
                <a href="#">categorie 0</a>
                <a href="#">categorie 1</a>
                <a href="#">categorie 2</a>
                <a href="#">categorie 3</a>
                <a href="" class="troisPoints">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg>
                </a>
                <!--trois-points-component></trois-points-component-->
            </div> 
        </div>

        <div class="row">
            <div class="col pub1">pub1</div>
        </div>
        <div class="row">
            <div class="col-sm-3 categorie">
                <div>
                <span class="caret">categorie </span>
                <!--ul>
                    <li>categorie 0</li>
                    <li>categorie 1</li>
                    <li>categorie 2</li>
                    <li>categorie 3</li>
                    <li>categorie 4</li>
                </ul>    
                <ul>
                    <li>region 0</li>
                    <li>region 1</li>
                    <li>region 2</li>
                    <li>region 3</li>
                    <li>region 4</li>
                </ul-->
                    
                <ul> 
                    <li><a href="#">categorie 0</a></li>
                    <li><a href="#">categorie 1</a></li>
                    <li><a href="#">categorie 2</a></li>
                    <li><a href="#">categorie 3</a></li>
                </ul>
                <ul>
                    <li><a href="#">region 0</a></li>
                    <li><a href="#">region 1</a></li>
                    <li><a href="#">region 2</a></li>
                    <li><a href="#">region 3</a></li>
                </ul>
                    <categorie-component></categorie-component></div>
                
            </div>
            <div class="col-sm-6 aLaUne1">aLaUne1 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> </div>
            <div class="col-sm-3 region">region
                <!--categorie-component></categorie-component-->
            </div>
        </div>

        <div class="row"> 
            <div class="col-sm-6 pub2">pub2</div>
            <div class="col-sm-6 pub2">pub2</div>
        </div>

        <div class="row aLaUne2">
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
            <div class="col-sm-2 photoAlaUne">photoAlaUne</div>
        </div>
        <div class="row">
            <div class="col footer"> <br></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>