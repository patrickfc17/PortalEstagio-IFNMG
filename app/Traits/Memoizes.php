<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait Memoizes
{
    public static function memoized(Model|string $model, array &$records, int $except = 0): int
    {
        if (!in_array(Randomizes::class, class_uses_recursive($model)))
            return 0;

        $model = match (gettype($model)) {
            'string' => new $model,
            default => $model
        };

        $record = $model::random();

        while (in_array($record, $records) or (!!$except and $record === $except))
            $record = $model::random();

        $records[] = $record;

        return $record;
    }
}
