<?php

namespace App\Providers\V1;

use Domains\V1\Address\AddressServiceProvider;
use Illuminate\Support\ServiceProvider;

final class BindingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerAddressProvider();
    }

    private function registerAddressProvider(): void
    {
        $this->app->register(
            provider: AddressServiceProvider::class,
        );
    }
}
