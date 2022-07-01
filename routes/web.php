<?php

use Illuminate\Contracts\View\View;
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

Route::get('/clients', function () {
    return view('clients');
});



Route::get('/clients/{id}', function ($id) {
    return 'vous avez choisi ID ' .$id; 
});


Route::post('/clients/{id}', function ($id) {
    return 'vous avez crée ID ' .$id; 
});

Route::put('/clients/{id}', function ($id) {
    return 'vous avez modifié ID ' .$id; 
});



Route::delete('/clients/{id}', function ($id) {
    return 'vous avez supprimé ID ' .$id; 
});

