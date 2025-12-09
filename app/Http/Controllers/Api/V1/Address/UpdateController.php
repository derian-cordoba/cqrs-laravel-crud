<?php

namespace App\Http\Controllers\Api\V1\Address;

use App\Http\Resources\V1\Address\AddressUpdatedResource;
use App\Models\Address;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class UpdateController
{
    // TODO: For time, I'm using a generic Request, but should be a UpdateAddressRequest to validate the data
    // and UpdateAddressPayload to type the data.
    public function __invoke(Request $request): Responsable
    {
        // TODO: For time, I'm using the Eloquent model directly, but should be a UpdateAddressCommand
        $address = Address::query()->updateOrCreate(
            attributes: [
                'id_direccion' => $request->input('id_direccion'),
            ],
            values: $request->all(),
        );

        return new ModelResponse(
            data: new AddressUpdatedResource(
                resource: $address,
            ),
        );
    }
}
