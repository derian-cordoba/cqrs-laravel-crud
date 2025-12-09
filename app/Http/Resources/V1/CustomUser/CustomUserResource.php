<?php

namespace App\Http\Resources\V1\CustomUser;

use App\Http\Resources\V1\Address\AddressCollection;
use App\Http\Resources\V1\Phone\PhoneCollection;
use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read CustomUser $resource
 */
final class CustomUserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id_usuario,
            'name' => $this->resource->nombre,
            'surname' => $this->resource->apellido,
            'email' => $this->resource->email,
            'birth_date' => $this->resource->fecha_nacimiento,

            $this->mergeWhen(
                condition: $request->routeIs(patterns: '*.custom_users.*'),
                value: [
                    'addresses' => new AddressCollection(
                        resource: $this->resource->addresses,
                    ),
                ],
            ),

            $this->mergeWhen(
                condition: $request->routeIs(patterns: '*.custom_users.*'),
                value: [
                    'phones' => new PhoneCollection(
                        resource: $this->resource->phones,
                    ),
                ],
            ),

            'created_at' => $this->resource->fecha_registro,
        ];
    }
}
