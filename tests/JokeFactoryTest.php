<?php

namespace Apsbd\BanglaJokes\Tests;

use Apsbd\BanglaJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_random_bangal_joke()
    {
        $mock = new MockHandler(
            [
                new Response(200, [], '{ "type": "success", "value": { "id": 462, "joke": "Project managers never ask Chuck Norris for estimations... ever.", "categories": ["nerdy"] } }'),
            ]
        );

        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);

        $this->assertSame('Project managers never ask Chuck Norris for estimations... ever.', $jokes->getRandomJoke());
    }
}
