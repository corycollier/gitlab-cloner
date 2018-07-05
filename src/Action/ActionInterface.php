<?php

namespace GitTools\Action;

use GitTools\Repository;

interface ActionInterface
{
    public function execute(Repository $repo) : ActionInterface;
}
