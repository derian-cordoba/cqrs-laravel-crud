<?php

namespace App\Http\Controllers\Api\V1\CustomUser;

use App\Http\Resources\V1\CustomUser\CustomUserResource;
use App\Models\CustomUser;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final readonly class FindController
{
    public function __invoke(Request $request): Responsable
    {
        $user = CustomUser::query()->findOrFail(
            id: $request->input('id_usuario'),
        );

        return new ModelResponse(
            data: new CustomUserResource(
                resource: $user,
            ),
        );
    }
}
