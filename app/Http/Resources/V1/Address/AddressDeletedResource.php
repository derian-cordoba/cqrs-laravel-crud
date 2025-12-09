<?php

namespace App\Http\Resources\V1\Address;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class AddressDeletedResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Address deleted successfully',
        ];
    }
}
