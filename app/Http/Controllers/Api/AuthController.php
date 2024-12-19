<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use App\Services\ResponseService;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;
use Symfony\Component\HttpFoundation\Response;

define('API_VERSION', env('API_VERSION'));

#[Middleware('api')]
#[Prefix('api/' . API_VERSION . '/auth')]
class AuthController extends Controller
{
    #[Post('login')]
    public function __invoke(LoginFormRequest $request): JsonResponse
    {
        $user = (object) $request->validated();
        $token = auth('api')->attempt([
            'email' => $user->email,
            'password' => $user->senha
        ]);

        if (!$token)
            return ResponseService::exception(
                new AuthenticationException('Este usuário não existe no servidor.'),
                Response::HTTP_UNPROCESSABLE_ENTITY
            );

        $ttl = config('jwt.ttl') / 60;

        return ResponseService::success([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $ttl,
            'expires_in_extended' => $ttl . ($ttl <= 1 ? ' hora' : ' horas'),
        ], 'Usuário logado com sucesso.', Response::HTTP_OK);
    }
}
