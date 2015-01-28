<?php
namespace PHPFluent\Cache;

use ArrayAccess;
use Doctrine\Common\Cache\Cache as DoctrineCache;

class Cache implements ArrayAccess
{
    private $cache;

    public function __construct(DoctrineCache $cache)
    {
        $this->cache = $cache;
    }

    public function offsetExists($id)
    {
        return $this->cache->contains($id);
    }

    public function offsetGet($id)
    {
        return $this->cache->fetch($id);
    }

    public function offsetSet($id, $data)
    {
        return $this->cache->save($id, $data);
    }

    public function offsetUnset($id)
    {
        return $this->cache->delete($id);
    }
}
