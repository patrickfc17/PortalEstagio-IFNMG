<?php

namespace App\Enums;

enum TurnosEnum: string
{
    case INTEGRAL   = 'integral';
    case NOTURNO    = 'noturno';
    case MATUTINO   = 'matutino';
    case VESPERTINO = 'vespertino';
}
