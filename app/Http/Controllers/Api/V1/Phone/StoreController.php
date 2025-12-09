<?php

namespace App\Http\Controllers\Api\V1\Phone;

use App\Http\Resources\V1\Phone\PhoneCreatedResource;
use App\Models\Phone;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class StoreController
{
    public function __invoke(Request $request): Responsable
    {
        $phone = Phone::query()->create(
            attributes: $request->all(),
        );

        return new ModelResponse(
            data: new PhoneCreatedResource(
                resource: $phone,
            ),
        );
    }
}
