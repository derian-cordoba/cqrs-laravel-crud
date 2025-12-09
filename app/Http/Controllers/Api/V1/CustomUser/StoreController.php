<?php

namespace App\Http\Controllers\Api\V1\CustomUser;

use App\Http\Resources\V1\CustomUser\CustomUserCreatedResource;
use App\Models\Address;
use App\Models\CustomUser;
use App\Models\Phone;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class StoreController
{    public function __invoke(Request $request): Responsable
    {
        $user = CustomUser::query()->create(
            attributes: $request->all(),
        );

        // TODO: Using queues + queries + commands, we can optimize this process
        if ($phoneIds = $request->array('ids_telefonos')) {
            $phones = Phone::query()->whereIn(
                column: 'id_telefono',
                values: $phoneIds,
            )->get();

            $user->phones()->saveMany(
                models: $phones,
            );
        }

        // TODO: Using queues + queries + commands, we can optimize this process
        if ($addressIds = $request->array('ids_direcciones')) {
            $addresses = Address::query()->whereIn(
                column: 'id_direccion',
                values: $addressIds,
            )->get();

            $user->addresses()->saveMany(
                models: $addresses,
            );
        }

        return new ModelResponse(
            data: new CustomUserCreatedResource(
                resource: $user,
            ),
        );
    }
}
