<?php

namespace App\Http\Resources\V1\Address;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Address $resource
 */
final class AddressCreatedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Address created successfully',
            'address' => new AddressResource(
                resource: $this->resource,
            ),
        ];
    }
}
