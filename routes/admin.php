<?php

use Illuminate\Support\Facades\Route;

Route::get("/admin", function () {
    return "Admin Panel";
})->name('admin');
