<?php
use Illuminate\Support\Facades\Route;
use Chladek\Genres\Models\Genre;

Route::get('api/genres', function () {
    return Genre::all();
});
