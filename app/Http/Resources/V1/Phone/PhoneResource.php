<?php

namespace App\Http\Resources\V1\Phone;

use App\Http\Resources\V1\CustomUser\CustomUserResource;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Phone $resource
 */
final class PhoneResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id_telefono,
            $this->mergeWhen(
                condition: $request->routeIs(patterns: '*.phones.*'),
                value: [
                    'user' => $this->resource->customUser === null
                        ? null
                        : new CustomUserResource(
                            resource: $this->resource->customUser,
                        ),
                ],
            ),
            'type' => $this->resource->tipo,
            'number' => $this->resource->numero,
            'company' => $this->resource->compania,
            'is_primary' => $this->resource->principal,
            'is_active' => $this->resource->activo,
            'created_at' => $this->resource->creado_en,
        ];
    }
}
