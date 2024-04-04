<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/locale/{lang}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);
