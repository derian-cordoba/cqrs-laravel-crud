<?php

use App\Http\Controllers\Api\V1\CustomUser\FetchController;
use Illuminate\Support\Facades\Route;

// Fetch all custom users
Route::get(
    uri: '/',
    action: FetchController::class,
)->name(name: 'fetch');
