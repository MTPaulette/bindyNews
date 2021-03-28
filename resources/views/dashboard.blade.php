@extends('index')
@section('pagecss')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('titre')
    <title>dashboard</title>
@endsection
@section('menu')
    <!ul>
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
            </ul>
@endsection
