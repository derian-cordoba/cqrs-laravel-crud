<?php

namespace App\Http\Controllers\Api\V1\Address;

use App\Http\Resources\V1\Address\AddressCollection;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Infrastructure\V1\Address\Queries\FetchAddressesQueryContract;

final readonly class FetchController
{
    public function __construct(
        private FetchAddressesQueryContract $query,
    )
    {
        //
    }

    public function __invoke(): Responsable
    {
        $addresses = $this->query->handle();

        return new ModelResponse(
            data: new AddressCollection(
                resource: $addresses,
            ),
        );
    }
}
