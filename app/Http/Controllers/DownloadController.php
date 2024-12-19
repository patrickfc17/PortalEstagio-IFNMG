<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadController extends Controller
{
    public function legislacao(): StreamedResponse
    {
        Storage::disk('local')
            ->put('legislacao-1.pdf', file_get_contents('/var/www/html/storage/app/public/legislacao.pdf'));

        return Storage::download('legislacao-1.pdf', 'legislacao.pdf');
    }

    public function regulamento(): StreamedResponse
    {
        Storage::disk('local')
            ->put('regulamento-1.pdf', file_get_contents('/var/www/html/storage/app/public/regulamento.pdf'));

        return Storage::download('regulamento-1.pdf', 'regulamento.pdf');
    }
}
