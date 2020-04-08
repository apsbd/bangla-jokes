# Bangla Jokes

[![Build Status](https://travis-ci.com/apsbd/bangla-jokes.svg?branch=master)](https://travis-ci.com/apsbd/bangla-jokes)

Generate random bangla jokes.

## Installation

Require the package using composer

```bash
composer require apsbd/bangla-jokes
```

## Usage

```php
use Apsbd\BanglaJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```


## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
