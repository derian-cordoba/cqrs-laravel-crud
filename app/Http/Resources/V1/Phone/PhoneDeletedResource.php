<?php

namespace App\Http\Resources\V1\Phone;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class PhoneDeletedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Phone deleted successfully',
        ];
    }
}
