<?php

namespace App\Http\Resources\V1\CustomUser;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class CustomUserDeletedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Custom user deleted successfully',
        ];
    }
}
