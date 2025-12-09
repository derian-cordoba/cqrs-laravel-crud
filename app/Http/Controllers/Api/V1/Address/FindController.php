<?php

namespace App\Http\Controllers\Api\V1\Address;

use App\Http\Resources\V1\Address\AddressResource;
use App\Models\Address;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class FindController
{
    public function __invoke(Request $request): Responsable
    {
        $address = Address::query()->findOrFail(
            id: $request->input('id_direccion'),
        );

        return new ModelResponse(
            data: new AddressResource(
                resource: $address,
            ),
        );
    }
}
