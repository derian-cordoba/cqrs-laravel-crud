<?php

use App\Http\Controllers\Api\V1\CustomUser\DestroyController;
use App\Http\Controllers\Api\V1\CustomUser\FetchController;
use App\Http\Controllers\Api\V1\CustomUser\StoreController;
use App\Http\Controllers\Api\V1\CustomUser\UpdateController;
use Illuminate\Support\Facades\Route;

// Fetch all custom users
Route::get(
    uri: '/',
    action: FetchController::class,
)->name(name: 'fetch');

// Store a new user
Route::post(
    uri: '/',
    action: StoreController::class,
)->name(name: 'store');

// Update a user
Route::patch(
    uri: '/',
    action: UpdateController::class,
)->name(name: 'update');

// Destroy a new user
Route::delete(
    uri: '/',
    action: DestroyController::class,
)->name(name: 'destroy');
