<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil',[ResumeController::class, 'index']);
//          'URL' ,  Controller           , methode dans le controller .
 Route::get('/curriculum',[ResumeController::class, 'curriculum']);
 Route::get('/projets',[ResumeController::class, 'projets']);
 Route::get('/contact',[ResumeController::class, 'contact']);
 Route::post('/contact',[ResumeController::class, 'contactForm']);




