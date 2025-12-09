<?php

namespace Domains\V1\CustomUser\Queries;

use App\Models\CustomUser;
use Illuminate\Database\Eloquent\Collection;
use Infrastructure\V1\CustomUser\Queries\FetchCustomUsersQueryContract;

final readonly class FetchCustomUsersQuery implements FetchCustomUsersQueryContract
{
    public function handle(): Collection
    {
        return CustomUser::query()->get();
    }
}
