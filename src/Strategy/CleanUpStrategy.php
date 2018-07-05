<?php

namespace GitTools\Strategy;

use GitTools\Action\FetchAction;
use GitTools\Action\GarbageCollectionAction;
use GitTools\Action\PruneOriginAction;

class CleanUpStrategy extends AbstractStrategy
{
    public function __construct()
    {
        $this->addActions([
            new FetchAction(),
            new GarbageCollectionAction(),
            new PruneOriginAction(),
        ]);
    }
}
