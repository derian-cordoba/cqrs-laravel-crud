<?php

namespace App\Http\Controllers\Api\V1\Phone;

use App\Http\Resources\V1\Phone\PhoneCollection;
use Application\Network\Http\ModelResponse;
use Illuminate\Contracts\Support\Responsable;
use Infrastructure\V1\Phones\Queries\FetchPhonesQueryContract;

final readonly class FetchController
{
    public function __construct(
        private FetchPhonesQueryContract $query,
    )
    {
        //
    }

    public function __invoke(): Responsable
    {
        $phones = $this->query->handle();

        return new ModelResponse(
            data: new PhoneCollection(
                resource: $phones,
            ),
        );
    }
}
