<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Requests\InformacoesPessoaisFormRequest;
use App\Models\Documento;
use App\Models\Estagiario;
use App\Models\Filiacao;
use App\Models\Matricula;
use App\Models\User;
use App\Services\ResponseService;
use Exception;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use Spatie\RouteAttributes\Attributes\Middleware;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;
use Symfony\Component\HttpFoundation\Response;

#[Middleware(JwtMiddleware::class)]
#[Prefix('api/' . API_VERSION)]
class EstagiariosController extends Controller
{
    #[Post('estagiarios')]
    public function store(InformacoesPessoaisFormRequest $request)
    {
        $informacoesPessoais = (object) $request->validated();
        $payload = [];

        try {
            $user = User::findOrFail(JWTAuth::payload()->get('sub'));

            $user->name = $informacoesPessoais->estagiario['nome'];
            unset($informacoesPessoais->estagiario['nome']);

            $user->save();

            DB::beginTransaction();

            $payload['estagiario'] = Estagiario::factory()->create(['user_id' => JWTAuth::payload()->get('sub'), ...$informacoesPessoais->estagiario]);
            $payload['filiacao']   = Filiacao::factory()->create(['estagiario_id' => $payload['estagiario']->id, ...$informacoesPessoais->filiacao]);
            $payload['documentos'] = Documento::factory()->create(['estagiario_id' => $payload['estagiario']->id, ...$informacoesPessoais->documentos]);
            $payload['matricula']  = Matricula::factory()->create(['estagiario_id' => $payload['estagiario']->id, ...$informacoesPessoais->matricula]);

            DB::commit();
        } catch (UniqueConstraintViolationException $e) {
            DB::rollback();

            return ResponseService::exception(
                $e,
                Response::HTTP_FORBIDDEN,
                'Os dados deste estagiário já existem no sistema.'
            );
        } catch (Exception $e) {
            DB::rollback();

            return ResponseService::exception(
                $e,
                Response::HTTP_INTERNAL_SERVER_ERROR,
                'Ocorreu um erro inesperado ao persistir os dados deste estagiário.'
            );
        }

        unset($payload['documentos']->id);
        unset($payload['matricula']->id);

        return ResponseService::success($payload, 'Informações Pessoais criadas com sucesso!', Response::HTTP_CREATED);
    }
}
