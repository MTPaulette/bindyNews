@extends('menu')
@section('pagecss')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('css/accueil.css') }}">
@endsection
@section('titre')
    <title>accueil</title>
@endsection
@section('contenu')
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
@endsection