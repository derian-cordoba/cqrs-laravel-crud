<?php

namespace Infrastructure\V1\CustomUser\Queries;

use Illuminate\Database\Eloquent\Collection;

interface FetchCustomUsersQueryContract
{
    public function handle(): Collection;
}
