<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AllowTelegramIframe;

Route::middleware([AllowTelegramIframe::class])->get('/', function () {
    return view('welcome');
});
