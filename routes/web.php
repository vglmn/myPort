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

Route::get('/vue1', function () {
    return view('vue1');
});

// permet, avec article.blade.php de faire une page qui selon l'URL diras (je suis l'article x)

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('{n}', function($n) {
    return response('Je suis la page ' . $n . ' !', 200);
})->where('n', '[1-3]');
