<?php

use App\Http\Controllers\Api\V1\Phone\DestroyController;
use App\Http\Controllers\Api\V1\Phone\FetchController;
use App\Http\Controllers\Api\V1\Phone\FindController;
use App\Http\Controllers\Api\V1\Phone\StoreController;
use App\Http\Controllers\Api\V1\Phone\UpdateController;
use Illuminate\Support\Facades\Route;

// Fetch all addresses
Route::get(
    uri: '/',
    action: FetchController::class,
)->name(name: 'fetch');

// Find a phone
Route::get(
    uri: '/search',
    action: FindController::class,
)->name(name: 'search');

// Store a new phone
Route::post(
    uri: '/',
    action: StoreController::class,
)->name(name: 'store');

// Update a phone
Route::patch(
    uri: '/',
    action: UpdateController::class,
)->name(name: 'update');

// Destroy a new phone
Route::delete(
    uri: '/',
    action: DestroyController::class,
)->name(name: 'destroy');
