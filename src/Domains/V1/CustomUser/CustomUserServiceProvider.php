<?php

namespace Domains\V1\CustomUser;

use Domains\V1\CustomUser\Queries\FetchCustomUsersQuery;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Infrastructure\V1\CustomUser\Queries\FetchCustomUsersQueryContract;

final class CustomUserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return [
            // Queries
            FetchCustomUsersQueryContract::class,
        ];
    }

    public function register(): void
    {
        $this->app->bind(
            abstract: FetchCustomUsersQueryContract::class,
            concrete: FetchCustomUsersQuery::class,
        );
    }
}
