<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Definindo a rota para o caminho home do site
Route::get('/', function () {
    return view('welcome'); //chama a view welcome do laravel
});

//Criando rota para o caminho contato
Route::get('/contato', function(){
  return "caminho para contato";
});

//criando a rota para uma pagina que seja obrigatório um id
Route::get('/id_obrigatorio/{id}', function($id){
  return "Rota com id obreigatorio id = $id";
});

//criando uma rota para uma pagina onde o id seja opcional
Route::get('/id_opcional/{id?}', function($id=null){
  return "rota com id opcional id=$id";
});

//criando rota para o post do site
Route::post('/post', function(){
  dd($_POST); //dd é um metodo do laravel que printa como json a variavel e da finish na função
  return "Rota selecionada para post";
});

//criando rota para o put do site, usado para updates de registro
Route::put('/put', function(){
  dd($_POST);
  return "Rota selecionada para PUT";
});
