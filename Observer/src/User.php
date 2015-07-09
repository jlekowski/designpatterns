<?php

namespace DesignPatterns\Observer;

class User implements \SplSubject
{
    /**
     * @var \SplObjectStorage
     */
    protected $observersStorage;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $status;

    /**
     * @param \SplObjectStorage $observersStorage
     * @param string $name
     */
    public function __construct(\SplObjectStorage $observersStorage, $name)
    {
        $this->observersStorage = $observersStorage;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function save()
    {
        printf("  * User '%s' updated - new status: '%s'\n", $this->getName(), $this->getStatus());
        $this->notify();
    }

    /**
     * @inheritdoc
     */
    public function attach(\SplObserver $observer)
    {
        $this->observersStorage->attach($observer);
    }

    /**
     * @inheritdoc
     */
    public function detach(\SplObserver $observer)
    {
        $this->observersStorage->detach($observer);
    }

    /**
     * @inheritdoc
     */
    public function notify()
    {
        foreach ($this->observersStorage as $observer) {
            $observer->update($this);
        }
    }
}
