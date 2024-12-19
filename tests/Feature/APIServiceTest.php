<?php

use App\Services\APIService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\Response;

it('Should GET the response of an API call', function () {
    $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');

    $response = $apiService->get('/posts');
    $body = $response->getBody()->getContents();

    expect(value: $body)->toBeJson();
    expect($response->getStatusCode())->toBe(Response::HTTP_OK);
    expect(count(json_decode($body)))->toBeGreaterThan(0);
});

it('Should GET the filtered data through the API call', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');


    $response = $apiService->get('/posts?userId=1');
    $body = $response->getBody()->getContents();

    expect(value: $body)->toBeJson();
    expect($response->getStatusCode())->toBe(Response::HTTP_OK);
    expect(count(json_decode($body)))->toBeGreaterThan(0);
});

it('Should NOT GET the response of an API call with invalid endpoint', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');


    $apiService->get('/summers');
})->throws(RequestException::class);

it('Should POST the data through the API call', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');

    $post = [
        'userId' => 1,
        'title' => 'Lorem ipsum dolor sit tamet consectetur, adipisicing tilet.',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maiores quibusdam quos doloribus quisquam impedit amet possimus. Ea, hic fugiat distinctio alias error perferendis vero facere nisi repellat amet cupiditate!'
    ];

    $response = $apiService->post('/posts', $post);

    expect($response->getBody()->getContents())->toBeJson();
    expect($response->getStatusCode())->toBe(Response::HTTP_CREATED);
});

it('Should PUT the data through the API call', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');

    $post = (object) [
        'id' => 1,
        'userId' => 1,
        'title' => 'Lorem ipsum dolor sit tamet consectetur, adipisicing tilet.',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maiores quibusdam quos doloribus quisquam impedit amet possimus. Ea, hic fugiat distinctio alias error perferendis vero facere nisi repellat amet cupiditate!'
    ];

    $response = $apiService->put("/posts/{$post->id}", $post);

    expect($response->getBody()->getContents())->toBeJson();
    expect($response->getStatusCode())->toBe(Response::HTTP_OK);
});

it('Should NOT PUT the data through the API call with invalid resource', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');

    $post = (object) [
        'id' => 101,
        'userId' => 10,
        'title' => 'Lorem ipsum dolor sit tamet consectetur, adipisicing tilet.',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maiores quibusdam quos doloribus quisquam impedit amet possimus. Ea, hic fugiat distinctio alias error perferendis vero facere nisi repellat amet cupiditate!'
    ];

    $apiService->put("/posts/{$post->id}", $post);
})->throws(RequestException::class);

it('Should PATCH the data through the API call', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');

    $post = (object) [
        'title' => 'Lorem ipsum dolor sit tamet consectetur, adipisicing tilet.',
    ];

    $response = $apiService->patch('/posts/1', $post);

    expect($response->getBody()->getContents())->toBeJson();
    expect($response->getStatusCode())->toBe(Response::HTTP_OK);
});

it('Should DELETE the data through the API call', function () {
        $apiService = APIService::instance(new Client(), 'https://jsonplaceholder.typicode.com');


    $response = $apiService->delete('/posts/1');

    expect($response->getStatusCode())->toBe(Response::HTTP_OK);
});
