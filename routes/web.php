<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (GET, POST, PUT, DELETE...)";
});

Route::match(['get','post'], '/match', function(){
    return "Permite apenas os tipos de acesso http definidos no array";

});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ""){
    return "O id do produto é: ".$id."<br> A categoria é: ".$cat;
});


// o laragon esta no drive para efeturar o download