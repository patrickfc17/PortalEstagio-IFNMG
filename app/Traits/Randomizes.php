<?php

namespace App\Traits;

trait Randomizes
{
    public static function random(bool $idsOnly = true): static|int|string
    {
        return $idsOnly
            ? self::all()->pluck('id')->random()
            : self::all()->random();
    }
}
