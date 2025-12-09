<?php

namespace App\Http\Controllers\Api\V1\CustomUser;

use App\Http\Resources\V1\CustomUser\CustomUserUpdatedResource;
use App\Models\CustomUser;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class UpdateController
{
    public function __invoke(Request $request): Responsable
    {
        $user = CustomUser::query()->updateOrCreate(
            attributes: [
                'id_usuario' => $request->input('id_usuario'),
            ],
            values: $request->all(),
        );

        return new ModelResponse(
            data: new CustomUserUpdatedResource(
                resource: $user,
            ),
        );
    }
}
