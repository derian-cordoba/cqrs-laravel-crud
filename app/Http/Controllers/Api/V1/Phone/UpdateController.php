<?php

namespace App\Http\Controllers\Api\V1\Phone;

use App\Http\Resources\V1\Phone\PhoneUpdatedResource;
use App\Models\Phone;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class UpdateController
{
    public function __invoke(Request $request): Responsable
    {
        $phone = Phone::query()->updateOrCreate(
            attributes: [
                'id_telefono' => $request->input('id_telefono'),
            ],
            values: $request->all(),
        );

        return new ModelResponse(
            data: new PhoneUpdatedResource(
                resource: $phone,
            ),
        );
    }
}
