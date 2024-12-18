<?php

namespace App\Enums;

enum EstadosCivisEnum: string
{
    case SOLTEIRO   = 'solteiro';
    case CASADO     = 'casado';
    case SEPARADO   = 'separado';
    case DIVORCIADO = 'divorciado';
    case VIUVO      = 'viuvo';
}
