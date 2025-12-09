<?php

namespace App\Http\Controllers\Api\V1\Phone;

use App\Http\Resources\V1\Phone\PhoneDeletedResource;
use App\Models\Phone;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class DestroyController
{
    public function __invoke(Request $request): Responsable
    {
        Phone::query()->findOrFail(
            id: $request->input('id_telefono'),
        )->delete();

        return new ModelResponse(
            data: new PhoneDeletedResource(
                resource: null,
            ),
        );
    }
}
