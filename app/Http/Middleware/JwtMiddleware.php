<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\ResponseService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof TokenInvalidException)
                return ResponseService::exception($e, 401, 'Token inválido.');

            if ($e instanceof TokenExpiredException)
                return ResponseService::exception($e, 498, 'Token expirado.');

            return ResponseService::exception($e, 401, 'Token não encontrado.');
        }

        return $next($request);
    }
}
