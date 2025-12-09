<?php

namespace App\Http\Controllers\Api\V1\CustomUser;

use App\Http\Resources\V1\Address\AddressCollection;
use App\Http\Resources\V1\CustomUser\CustomUserCollection;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Infrastructure\V1\CustomUser\Queries\FetchCustomUsersQueryContract;

final readonly class FetchController
{
    public function __construct(
        private FetchCustomUsersQueryContract $query,
    )
    {
        //
    }

    public function __invoke(): Responsable
    {
        $customUsers = $this->query->handle();

        return new ModelResponse(
            data: new CustomUserCollection(
                resource: $customUsers,
            ),
        );
    }
}
