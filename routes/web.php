<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/bonjour', function () {
    $prenom = 'Bob';
    return view('bonjour', [
        'prenom' => $prenom 
    ]);
});

Route::get('/bonjour/{prenom}', function($prenom) {

    return view('bonjour', [
        'prenom' => $prenom
        
    ]);
}); 

Route::get('/bonjour/{prenom}/{humeur}', function($prenom, $humeur) {


    return view('bonjour', [
        'prenom'=> $prenom ,
        'humeur' => $humeur
    ]);
});                                              