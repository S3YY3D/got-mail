<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function() {return view('home');} );

Route::get('/new_contact', [ContactController::class, 'show']);

Route::post('/store_form', [ContactController::class,'store'])->name('store_form');