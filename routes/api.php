<?php

use Illuminate\Support\Facades\Route;

Route::as('v1.')
    ->prefix('v1')
    ->group(
        // `base_path` documentation:
        // https://laravel.com/docs/12.x/helpers#method-base-path
        base_path('routes/resources/api/v1/routes.php'),
    );
