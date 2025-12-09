<?php

namespace Infrastructure\V1\Address\Queries;

use Illuminate\Database\Eloquent\Collection;

interface FetchAddressesQueryContract
{
    public function handle(): Collection;
}
