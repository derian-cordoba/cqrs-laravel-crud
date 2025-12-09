<?php

namespace Infrastructure\V1\Phones\Queries;

use Illuminate\Database\Eloquent\Collection;

interface FetchPhonesQueryContract
{
    public function handle(): Collection;
}
