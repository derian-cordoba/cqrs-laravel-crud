<?php

namespace App\Http\Controllers\Api\V1\CustomUser;

use App\Http\Resources\V1\CustomUser\CustomUserDeletedResource;
use App\Models\CustomUser;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class DestroyController
{
    public function __invoke(Request $request): Responsable
    {
        CustomUser::query()->findOrFail(
            id: $request->input('id_usuario'),
        )->delete();

        return new ModelResponse(
            data: new CustomUserDeletedResource(
                resource: null,
            ),
        );
    }
}
