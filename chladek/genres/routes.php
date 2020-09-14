<?php
use Illuminate\Support\Facades\Route;
use Chladek\Genres\Models\Genres;

Route::get('api/genres', function () {
    return Genres::all();
});
