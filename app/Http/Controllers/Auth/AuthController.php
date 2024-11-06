<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use App\Livewire\Forms\LoginForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginFormRequest $request)
    {
        try {
            $logged = Auth::attempt([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('senha'))
            ]);

            if (!$logged) throw new ModelNotFoundException();
        } catch (ModelNotFoundException) {
            flash()->error('Não encontramos um usuário com este email e/ou senha');

            return back()
                ->withInput($request->all());
        }

        return to_route('dashboard');
    }
}
