<?php

namespace App\Enums;

enum SexosEnum: string
{
    case HOMEM_CISGENERO    = 'homem_cisgenero';
    case MULHER_CISGENERO   = 'mulher_cisgenero';
    case HOMEM_TRANSGENERO  = 'homem_transgenero';
    case MULHER_TRANSGENERO = 'mulher_transgenero';
    case NAO_DECLARADO      = 'nao_declarado';
}
