<?php

namespace App\Http\Resources\V1\CustomUser;

use App\Models\CustomUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @property-read Collection<CustomUser> $resource
 */
final class CustomUserCollection extends JsonResource
{
    public function toArray(Request $request): array
    {
        return $this->resource->map(
            callback: fn (CustomUser $customUser): CustomUserResource => new CustomUserResource(
                resource: $customUser,
            ),
        )->all();
    }
}
