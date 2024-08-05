<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'show']);

Route::post('/store_form', [ContactController::class,'store'])->name('store_form');