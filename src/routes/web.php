<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('index', ['title' => 'Affected Countries']);
});

Route::get('/country', [CountryController::class, 'show']);


