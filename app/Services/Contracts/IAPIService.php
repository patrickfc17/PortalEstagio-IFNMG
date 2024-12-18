<?php

namespace App\Services\Contracts;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

interface IAPIService
{
    public function get(string $endpoint, array|object|null $headers = null): ResponseInterface;

    public function post(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface;

    public function put(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface;

    public function patch(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface;

    public function delete(string $endpoint, array|object|null $headers = null): ResponseInterface;
}
