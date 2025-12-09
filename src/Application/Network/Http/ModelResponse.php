<?php

namespace Application\Network\Http;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

final readonly class ModelResponse implements Responsable
{
    public function __construct(
        public JsonResource | array $data,
        public int $status = Response::HTTP_OK,
    ) {
        //
    }

    /**
     * Convert the response to a JSON response object.
     *
     * @param  Request  $request  The request object
     * @return JsonResponse The JSON response object
     */
    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                'data' => $this->data,
            ],
            status: $this->status,
        );
    }
}
