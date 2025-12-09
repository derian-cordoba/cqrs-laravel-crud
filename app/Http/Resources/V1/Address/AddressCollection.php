<?php

namespace App\Http\Resources\V1\Address;

use App\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @property-read Collection<Address> $resource
 */
final class AddressCollection extends JsonResource
{
    public function toArray(Request $request): array
    {
        return $this->resource->map(
            callback: fn (Address $address): AddressResource => new AddressResource(
                resource: $address,
            ),
        )->all();
    }
}
