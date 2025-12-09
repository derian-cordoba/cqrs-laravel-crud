<?php

namespace App\Http\Controllers\Api\V1\Phone;

use App\Http\Resources\V1\Phone\PhoneResource;
use App\Models\Phone;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class FindController
{
    public function __invoke(Request $request): Responsable
    {
        $phone = Phone::query()->findOrFail(
            id: $request->input('id_telefono'),
        );

        return new ModelResponse(
            data: new PhoneResource(
                resource: $phone,
            ),
        );
    }
}
