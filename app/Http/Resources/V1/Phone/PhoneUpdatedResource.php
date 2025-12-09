<?php

namespace App\Http\Resources\V1\Phone;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Phone $resource
 */
final class PhoneUpdatedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Phone updated successfully',
            'phone' => new PhoneResource(
                resource: $this->resource,
            ),
        ];
    }
}
