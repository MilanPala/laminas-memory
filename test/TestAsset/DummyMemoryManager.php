<?php

namespace LaminasTest\Memory\TestAsset;

use Laminas\Memory\Container;
use Laminas\Memory\MemoryManager;

/**
 * Memory manager helper
 */
class DummyMemoryManager extends MemoryManager
{
    /**
     * @var bool
     */
    public $processUpdatePassed = false;

    /**
     * @var integer
     */
    public $processedId;

    /**
     * @var Container\Movable
     */
    public $processedObject;

    /**
     * Empty constructor
     */
    public function __construct()
    {
        // Do nothing
    }

    /**
     * DummyMemoryManager value update callback method
     *
     * @param Container\Movable $container
     * @param int|string $id
     */
    public function processUpdate(Container\Movable $container, $id)
    {
        $this->processUpdatePassed = true;
        $this->processedId         = $id;
        $this->processedObject     = $container;
    }
}
