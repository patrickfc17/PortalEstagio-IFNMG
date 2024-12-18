<?php

use Random\Randomizer;

if (!function_exists('random_strong_password')) {
    function random_strong_password(): string
    {
        $randomizer = new Randomizer();
        $caracters = [
            'lower' => 'abcdefghijklmnopqrstuvwxyz',
            'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'numbers' => '1234567890',
            'special' => '!@#$%*()_+=-/"\'|\\:;^~.,',
        ];

        $randomString = '';
        foreach ($caracters as $type)
            $randomString .= $randomizer->getBytesFromString($type, 5);

        return $randomString;
    }
}
