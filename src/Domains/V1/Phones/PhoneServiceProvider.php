<?php

namespace Domains\V1\Phones;

use Domains\V1\Phones\Queries\FetchPhonesQuery;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Infrastructure\V1\Phones\Queries\FetchPhonesQueryContract;

final class PhoneServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return [
            // Queries
            FetchPhonesQueryContract::class,
        ];
    }

    public function register(): void
    {
        $this->app->bind(
            abstract: FetchPhonesQueryContract::class,
            concrete: FetchPhonesQuery::class,
        );
    }
}
