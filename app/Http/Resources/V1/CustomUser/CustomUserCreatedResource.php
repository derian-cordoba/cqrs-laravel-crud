<?php

namespace App\Http\Resources\V1\CustomUser;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read CustomUser $resource
 */
final class CustomUserCreatedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Custom user created successfully',
            'user' => new CustomUserResource(
                resource: $this->resource,
            ),
        ];
    }
}
