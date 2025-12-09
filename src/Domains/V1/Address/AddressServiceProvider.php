<?php

namespace Domains\V1\Address;

use Domains\V1\Address\Queries\FetchAddressesQuery;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Infrastructure\V1\Address\Queries\FetchAddressesQueryContract;

final class AddressServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return [
            // Queries
            FetchAddressesQueryContract::class,
        ];
    }

    public function register(): void
    {
        $this->app->bind(
            abstract: FetchAddressesQueryContract::class,
            concrete: FetchAddressesQuery::class,
        );
    }
}
