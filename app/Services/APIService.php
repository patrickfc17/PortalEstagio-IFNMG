<?php

namespace App\Services;

use App\Services\Contracts\IAPIService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Str;

final class APIService implements IAPIService
{
    private static ?APIService $instace = null;

    private function __construct(
        private readonly Client $guzzle,
        private readonly string $apiBase,
    ) {}

    public static function instance(Client $guzzle, string $apiBase = ''): static
    {
        if (!self::$instace)
            self::$instace = new static($guzzle, $apiBase ?: env('API_BASE'));

        return self::$instace;
    }

    public function get(string $endpoint, array|object|null $headers = null): ResponseInterface
    {
        $endpoint = Str::startsWith($endpoint, '/')
            ? $endpoint
            : "/$endpoint";

        if (!!$headers)
            return $this->guzzle->request('GET', $this->apiBase . $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers
            ]);

        return $this->guzzle->request('GET', $this->apiBase . $endpoint);
    }

    public function post(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        $endpoint = Str::startsWith($endpoint, '/')
            ? $endpoint
            : "/$endpoint";

        if (!!$headers)
            return $this->guzzle->request('POST', $this->apiBase . $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('POST', $this->apiBase . $endpoint, ['json' => (array) $data]);
    }

    public function put(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        $endpoint = Str::startsWith($endpoint, '/')
            ? $endpoint
            : "/$endpoint";

        if (!!$headers)
            return $this->guzzle->request('PUT', $this->apiBase . $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('PUT', $this->apiBase . $endpoint, ['json' => (array) $data]);
    }

    public function patch(string $endpoint, array|object $data, array|object|null $headers = null): ResponseInterface
    {
        $endpoint = Str::startsWith($endpoint, '/')
            ? $endpoint
            : "/$endpoint";

        if (!!$headers)
            return $this->guzzle->request('PATCH', $this->apiBase . $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers,
                'json' => (array) $data,
            ]);

        return $this->guzzle->request('PATCH', $this->apiBase . $endpoint, ['json' => (array) $data]);
    }

    public function delete(string $endpoint, array|object|null $headers = null): ResponseInterface
    {
        $endpoint = Str::startsWith($endpoint, '/')
            ? $endpoint
            : "/$endpoint";

        if (!!$headers)
            return $this->guzzle->request('DELETE', $this->apiBase . $endpoint, [
                'headers' => gettype($headers) === 'array' ? $headers : (array) $headers
            ]);

        return $this->guzzle->request('DELETE', $this->apiBase . $endpoint);
    }
}
