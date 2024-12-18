<?php

if (!function_exists('cases')) {
    function cases(string $enum): array
    {
        return collect((new ReflectionEnum($enum))->getCases())
            ->map(static fn(ReflectionEnumBackedCase $case): int|string => $case->getBackingValue())
            ->toArray();
    }
}
