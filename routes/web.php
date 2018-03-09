<?php

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
Route::get('/holi', function () {
    return 'Hola mundo';
});
Route::get('/usuarios',function (){
    return 'usuarios';
});
Route::get('/usuarios/detalles/{id}', function ($id) {
    return "Detalles del usuario: {$id}";
});
Route::get('usuarios/nuevo',function (){
    return 'crear nuevo usuario';
});

Route::get('/usuarios/{id}', function ($id) {
    return "mostrando detalles del usuario: {$id}";
});



Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
    return "Este el comentario {$commentId} del post {$postId}";
});
Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});
Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});
Route::get('/', function () {
    return view('welcome');
});
