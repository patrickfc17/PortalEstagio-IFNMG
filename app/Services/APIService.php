<?php

namespace App\Services;

use App\Services\Contracts\IAPIService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

final class APIService implements IAPIService
{
    private static ?APIService $instace = null;

    private function __construct(
        private readonly Client $guzzle
    ) {}

    public static function instance(Client $guzzle): static
    {
        if (!self::$instace)
            self::$instace = new static($guzzle);

        return self::$instace;
    }

    public function get(string $endpoint, array|object|null $headers = null): ResponseInterface
    {
        if (!!$headers)
            return $this->guzzle->request('GET', $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers
            ]);

        return $this->guzzle->request('GET', $endpoint);
    }

    public function post(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        if (!!$headers)
            return $this->guzzle->request('POST', $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('POST', $endpoint, ['json' => (array) $data]);
    }

    public function put(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        if (!!$headers)
            return $this->guzzle->request('PUT', $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('PUT', $endpoint, ['json' => (array) $data]);
    }

    public function patch(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        if (!!$headers)
            return $this->guzzle->request('PATCH', $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('PATCH', $endpoint, ['json' => (array) $data]);
    }

    public function delete(string $endpoint, array|object|null $headers = null): ResponseInterface
    {
        if (!!$headers)
            return $this->guzzle->request('DELETE', $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers
            ]);

        return $this->guzzle->request('DELETE', $endpoint);
    }
}
