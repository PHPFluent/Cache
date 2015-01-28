# PHPFluent\Cache
[![Build Status](https://api.travis-ci.org/PHPFluent/Cache.png)](https://travis-ci.org/PHPFluent/Cache)

A fluent cache library for PHP built on the shoulders of [Doctrine\Cache](https://github.com/doctrine/cache).

## Installation

Package is available on [Packagist](https://packagist.org/packages/phpfluent/cache), you can install it
using [Composer](http://getcomposer.org).

```bash
composer require phpfluent/cache
```

## Usage

```php
use PHPFluent\Cache\Cache;

/**
 * @var Doctrine\Common\Cache\Cache $doctrine
 */
$doctrine;

$cache        = new Cache($doctrine);
$cache['foo'] = 'bar'; //Caching the information

echo isset($cache['foo']);
echo $cache['foo'];

unset($cache['foo']);//Deleting the cache
```
