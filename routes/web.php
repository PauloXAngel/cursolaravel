<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function(){
    return view('site/empresa');    
});

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (GET, POST, PUT, DELETE...)";
});

Route::match(['get','post'], '/match', function(){
    return "Permite apenas os tipos de acesso http definidos no array";

});