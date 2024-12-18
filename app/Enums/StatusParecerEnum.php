<?php

namespace App\Enums;

enum StatusParecerEnum: string
{
    case MATRICULADO   = 'regularmente_matriculado';
    case INTEGRALIZADO = 'carga_horaria_integralizada';
    case DEPENDENCIA   = 'regime_dependencia';
}
