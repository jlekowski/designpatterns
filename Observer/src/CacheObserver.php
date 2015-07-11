<?php

namespace DesignPatterns\Observer;

class CacheObserver implements \SplObserver
{
    /**
     * @var Cache
     */
    protected $cache;

    /**
     * @param Cache $cache
     */
    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof User) {
            $this->cache->storeUser($subject);
        }
    }
}
