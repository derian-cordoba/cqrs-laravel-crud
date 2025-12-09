<?php

namespace App\Providers\V1;

use Domains\V1\Address\AddressServiceProvider;
use Domains\V1\CustomUser\CustomUserServiceProvider;
use Domains\V1\Phones\PhoneServiceProvider;
use Illuminate\Support\ServiceProvider;

final class BindingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerAddressProvider();
        $this->registerCustomUserProvider();
        $this->registerPhoneProvider();
    }

    private function registerAddressProvider(): void
    {
        $this->app->register(
            provider: AddressServiceProvider::class,
        );
    }

    private function registerCustomUserProvider(): void
    {
        $this->app->register(
            provider: CustomUserServiceProvider::class,
        );
    }

    private function registerPhoneProvider(): void
    {
        $this->app->register(
            provider: PhoneServiceProvider::class,
        );
    }
}
