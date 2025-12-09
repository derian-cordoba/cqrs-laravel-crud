<?php

use App\Http\Controllers\Api\V1\Address\DestroyController;
use App\Http\Controllers\Api\V1\Address\FetchController;
use App\Http\Controllers\Api\V1\Address\StoreController;
use App\Http\Controllers\Api\V1\Address\UpdateController;
use Illuminate\Support\Facades\Route;

// Fetch all addresses
Route::get(
    uri: '/',
    action: FetchController::class,
)->name(name: 'fetch');

// Store a new address
Route::post(
    uri: '/',
    action: StoreController::class,
)->name(name: 'store');

// Update a address
Route::patch(
    uri: '/',
    action: UpdateController::class,
)->name(name: 'update');

// Destroy a new address
Route::delete(
    uri: '/',
    action: DestroyController::class,
)->name(name: 'destroy');
