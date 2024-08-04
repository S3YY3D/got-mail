<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contact');
});

Route::get('show-form', [ContactController::class, 'show']);

Route::post('store-form', [ContactController::class, 'store']);
