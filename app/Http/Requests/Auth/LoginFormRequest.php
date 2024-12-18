<?php

namespace App\Http\Requests\Auth;

use App\Rules\StrongPassword;
use App\Traits\BojacksOnFail;
use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    use BojacksOnFail;

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
            'email' => ['required', 'string', 'email', 'ends_with:@aluno.ifnmg.edu.br'],
            'senha' => ['required', 'string', 'min:8', new StrongPassword]
        ];
    }
}
