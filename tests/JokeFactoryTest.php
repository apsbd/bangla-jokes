<?php

namespace Apsbd\BanglaJokes\Tests;

use Apsbd\BanglaJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_random_bangal_joke()
    {
        $jokes = new JokeFactory(['A bangla joke']);
        $this->assertSame('A bangla joke', $jokes->getRandomJoke());
    }

    /** @test */
    public function it_returns_predefined_random_bangla_joke()
    {
        $banglaJokes = [
        'যখন তোমার একা লাগবে, তুমি চারদিকে কিছুই দেখতে পাবে না, দুনিয়া টা ঝাপসা হয়ে আসবে। তখন তুমি আমার কাছে এসো। . . তোমাকে চোখের ডাক্তার দেখাবো।',
        'এখন আমার হাতে এক বোতল বিশ। আমি মুক্তি পেতে চাই এতো জালা আমার আর এখন সহ্য হয় না। জানি এটা পাপ। এতো যন্ত্রণা আর ভালো লাগে না। তাই যাচ্ছি ইদুর মারতে।',
        'সে আসলো, আমার উপর বসলো, আমাকে জড়িয়ে ধরলো, পরে কামর, চুমু দিল। তারপর নিজের প্রয়োজন মিটিয়ে চলে গেল। খারাপ চিন্তা ভাবনা বাদ দিয়ে ভালো চিন্তা ভাবনা কর। ঐটা একটা মশা ছিল।',

    ];

        $jokes = new JokeFactory;

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $banglaJokes);
    }
}
