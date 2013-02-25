Cache
=====

A fluent cache library for PHP.
[![Build Status](https://api.travis-ci.org/PHPFluent/Cache.png)](https://travis-ci.org/PHPFluent/Cache)

Usage:
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
