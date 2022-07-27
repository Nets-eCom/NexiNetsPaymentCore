<?php

namespace NetsCore\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class ApiService
{
    private Client $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function post(string $host, array $header = null, array $options = null)
    {
        $request = new Request('POST', $host, (array)$header);
        $res = $this->client->sendAsync($request, (array)$options)->wait();

        return $res->getBody();
    }

    public function get(string $host, array $header)
    {
        $request = new Request('GET', $host, (array)$header);
        $res = $this->client->sendAsync($request)->wait();

        return $res->getBody();
    }
}