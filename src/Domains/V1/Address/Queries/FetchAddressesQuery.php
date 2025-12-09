<?php

namespace Domains\V1\Address\Queries;

use App\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Infrastructure\V1\Address\Queries\FetchAddressesQueryContract;

final readonly class FetchAddressesQuery implements FetchAddressesQueryContract
{
    public function handle(): Collection
    {
        return Address::query()->get();
    }
}
