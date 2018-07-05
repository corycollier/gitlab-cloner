<?php

namespace GitTools\Action;

use GitTools\Repository;

class GarbageCollectionAction extends AbstractAction implements ActionInterface
{
    const COMMAND = 'git gc --auto';

    public function execute(Repository $repo) : ActionInterface
    {
        $this->chdir($repo)->exec(self::COMMAND);
        return $this;
    }
}
