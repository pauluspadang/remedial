<?php

use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return redirect('/kendaraan');
});

Route::resource('kendaraan', KendaraanController::class);
