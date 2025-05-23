<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AllowTelegramIframe;

Route::get('/', function () {
    return view('welcome');
})->middleware(AllowTelegramIframe::class);
