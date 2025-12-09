<?php

namespace App\Http\Resources\V1\Phone;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Collection<Phone> $resource
 */
final class PhoneCollection extends JsonResource
{
    public function toArray(Request $request): array
    {
        return $this->resource->map(
            callback: fn (Phone $phone): PhoneResource => new PhoneResource(
                resource: $phone,
            ),
        )->all();
    }
}
