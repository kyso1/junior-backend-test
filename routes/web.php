<?php

use App\Http\Controllers\CreateContactController;
use App\Http\Controllers\ListContactsController;
use App\Http\Controllers\UpdateContactController;
use App\Http\Controllers\DeleteContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contacts', CreateContactController::class);
Route::get('/contacts', [ListContactsController::class, 'index']);
Route::delete('/contacts/{id}', action: [DeleteContactController::class, '__invoke']);
Route::put('/contacts/{id}',UpdateContactController::class);
