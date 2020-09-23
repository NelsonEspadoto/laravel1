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

Route::get('/', 'welcome');

Route::view('/teste', 'teste');

Route::get('/{slug}', function ($slug) {
    return view('teste');
});

Route::get('noticia/{slug}/comentario/{id}', function($slug, $id) {
    //echo "Mostrando o comentário $slug da noticia $id";
    echo "Mostrando o comentário ".$id." da noticia ".$slug;
});

Route::get('/user/{id}', function ($id) {
    echo "Mostrando ID Usuário: ".$id;
//})->where("id", '[0-9]+');
});

Route::get('/user/{name}', function ($name) {
    echo "Mostrando Nome Usuário: ".$name;
//})->where("name", '[a-z,A-Z]+');
});