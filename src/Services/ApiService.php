<?php

namespace NexiNetsCore\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class ApiService
{
    private Client $client;

    /**
     * @param  Client|null  $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @param  string  $host
     * @param  array|null  $header
     * @param  array|null  $options
     * @return mixed
     */
    public function post(string $host, array $header = null, array $options = null)
    {
        $request = new Request('POST', $host, $header);
        $res = $this->client->sendAsync($request, $options)->wait();

        return $res->getBody();
    }

    /**
     * @param  string  $host
     * @param  array  $header
     * @return mixed
     */
    public function get(string $host, array $header)
    {
        $request = new Request('GET', $host, $header);
        $res = $this->client->sendAsync($request)->wait();

        return $res->getBody();
    }
}
