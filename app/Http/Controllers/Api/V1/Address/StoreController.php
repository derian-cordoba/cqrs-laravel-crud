<?php

namespace App\Http\Controllers\Api\V1\Address;

use App\Http\Resources\V1\Address\AddressCreatedResource;
use App\Models\Address;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class StoreController
{
    // TODO: For time, I'm using a generic Request, but should be a StoreAddressRequest to validate the data
    // and StoreAddressPayload to type the data.
    public function __invoke(Request $request): Responsable
    {
        // TODO: For time, I'm using the Eloquent model directly, but should be a CreateAddressCommand
        $address = Address::query()->create(
            attributes: $request->all(),
        );

        return new ModelResponse(
            data: new AddressCreatedResource(
                resource: $address,
            ),
        );
    }
}
