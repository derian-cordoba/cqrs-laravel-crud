<?php

use Illuminate\Support\Facades\Route;

Route::prefix('addresses')
    ->name('addresses.')
    ->group(base_path('routes/resources/api/v1/addresses/routes.php'));

    Route::prefix('custom_users')
    ->name('custom_users.')
    ->group(base_path('routes/resources/api/v1/custom_users/routes.php'));
