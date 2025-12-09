<?php

use Illuminate\Support\Facades\Route;

Route::prefix('addresses')
    ->name('addresses.')
    ->group(base_path('routes/resources/api/v1/addresses/routes.php'));
