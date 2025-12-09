<?php

namespace App\Http\Resources\V1\Address;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Address $resource
 */
final class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id_direccion,
            'user' => $this->resource->customUser,
            'type' => $this->resource->tipo,
            'street' => $this->resource->calle,
            'number' => $this->resource->numero,
            'city' => $this->resource->ciudad,
            'postal_code' => $this->resource->codigo_postal,
            'country' => $this->resource->pais,
            'is_primary' => $this->resource->principal,
            'created_at' => $this->resource->creado_en,
        ];
    }
}
