<?php

namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Override;

trait BojacksOnFail
{
    #[Override]
    protected function failedValidation(Validator $validator)
    {
        return back()
            ->withErrors($validator)
            ->withInput();
    }
}
