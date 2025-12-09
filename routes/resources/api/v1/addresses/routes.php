<?php

use App\Http\Controllers\Api\V1\Address\FetchController;
use Illuminate\Support\Facades\Route;

// Fetch all addresses
Route::get(
    uri: '/',
    action: FetchController::class,
)->name(name: 'fetch');
