<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/essai', function () {
    return view('essai');
});