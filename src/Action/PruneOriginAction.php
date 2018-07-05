<?php

namespace GitTools\Action;

use GitTools\Repository;

class PruneOriginAction extends AbstractAction implements ActionInterface
{
    const COMMAND = 'git remote prune origin';

    public function execute(Repository $repo) : ActionInterface
    {
        $this->chdir($repo)->exec(self::COMMAND);
        return $this;
    }
}
