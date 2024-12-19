<?php

namespace App\Http\Requests;

use App\Enums\EstadosCivisEnum;
use App\Enums\PeriodosEnum;
use App\Enums\SexosEnum;
use App\Enums\TurnosEnum;
use App\Services\ResponseService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Override;
use Symfony\Component\HttpFoundation\Response;

class InformacoesPessoaisFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'estagiario.nome' => 'string|min:1|required',
            'estagiario.naturalidade' => 'string|min:1|required',
            'estagiario.uf' => 'string|size:2|required',
            'estagiario.data_nascimento' => 'date|date_format:Y-m-d|required',
            'estagiario.estado_civil' => 'string|in:' . implode(',', cases(EstadosCivisEnum::class)) . '|required',
            'estagiario.sexo' => 'string|in:' . implode(',', cases(SexosEnum::class)) . '|required',
            'estagiario.telefone_fixo' => 'string',
            'estagiario.celular' => 'string',
            'filiacao.nome_mae' => 'string|min:1|required',
            'filiacao.nome_pai' => 'string|min:1',
            'documentos.cpf' => 'string|min:11|max:14|required',
            'documentos.rg' => 'string|min:10|max:13|required',
            'documentos.orgao_expedidor' => 'string|min:1|required',
            'matricula.numero_matricula' => 'string|size:6|required',
            'matricula.curso' => 'string|min:1|required',
            'matricula.turma' => 'string|min:1|required',
            'matricula.tipo_periodo' => 'string|in:' . implode(',', cases(PeriodosEnum::class)) . '|required',
            'matricula.turno' => 'string|in:' . implode(',', cases(TurnosEnum::class)) . '|required',
            'matricula.integralizado' => 'boolean|required',
            'matricula.periodo_integralizacao' => 'decimal:1',
        ];
    }

    #[Override]
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator): JsonResponse
    {
        return ResponseService::exception(
            new ValidationException($validator),
            Response::HTTP_UNPROCESSABLE_ENTITY,
            'Os dados enviados pelo payload da requisição são inválidos.'
        );
    }
}
