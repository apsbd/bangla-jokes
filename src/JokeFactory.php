<?php

namespace Apsbd\BanglaJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'https://api.icndb.com/jokes/random/';

    protected $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client;
    }

    public function getRandomJoke()
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $data = json_decode($response->getBody()->getContents());

        return $data->value->joke;
    }
}
