<?php

namespace GitTools\Strategy;

use GitTools\Action\FetchAction;
use GitTools\Action\PullAction;

class FetchAndPullStrategy extends AbstractStrategy
{
    public function __construct()
    {
        $this->addActions([
            new FetchAction(),
            new PullAction()
        ]);
    }
}
