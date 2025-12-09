<?php

namespace App\Http\Controllers\Api\V1\Address;

use App\Http\Resources\V1\Address\AddressDeletedResource;
use App\Models\Address;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class DestroyController
{
    public function __invoke(Request $request): Responsable
    {
        Address::query()->findOrFail(
            id: $request->input('id_direccion'),
        )->delete();

        return new ModelResponse(
            data: new AddressDeletedResource(
                resource: null,
            ),
        );
    }
}
