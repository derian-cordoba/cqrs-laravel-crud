<?php

namespace Domains\V1\Phones\Queries;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Collection;
use Infrastructure\V1\Phones\Queries\FetchPhonesQueryContract;

final readonly class FetchPhonesQuery implements FetchPhonesQueryContract
{
    public function handle(): Collection
    {
        return Phone::query()->get();
    }
}
