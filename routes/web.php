<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AllowTelegramIframe;

Route::middleware([AllowTelegramIframe::class])->group(function () {
    Route::view('/welcome', 'welcome'); // contoh
});
