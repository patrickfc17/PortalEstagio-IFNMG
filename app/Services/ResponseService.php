<?php

namespace App\Services;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ResponseService
{
    public static function success($data, string $message = null, int $code = 200)
    {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'data' => $data,
            ],
            $code
        );
    }

    public static function exception(\Throwable $exception, int $code = null, string $message = null)
    {
        return response()->json(
            [
                'success' => false,
                'message' => $message ?? $exception->getMessage(),
                'code' => $code ?? $exception->getCode(),
            ],
            $code ?? HttpFoundationResponse::HTTP_INTERNAL_SERVER_ERROR
        );
    }
}

