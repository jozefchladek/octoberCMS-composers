<?php

use Illuminate\Support\Facades\Route;
use Chladek\Composers\Models\Composer;

Route::get('api/composer', function () {
    return Composer::all();
});
Route::get('api/composer/{id}', function ($id) {
   return Composer::find($id);
});
Route::post('api/composer/create', '\Chladek\Composers\Controllers\ComposerController@createNewComposer');
Route::post('api/composer/delete', '\Chladek\Composers\Controllers\ComposerController@removeComposer');
Route::get('api/autocomplete', '\Chladek\Composers\Controllers\ComposerController@autocomplete');
