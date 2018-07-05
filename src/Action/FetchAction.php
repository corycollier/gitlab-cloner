<?php

namespace GitTools\Action;

use GitTools\Repository;

class FetchAction extends AbstractAction implements ActionInterface
{
    const COMMAND = 'git fetch --all';

    public function execute(Repository $repo) : ActionInterface
    {
        $this->chdir($repo)->exec(self::COMMAND);
        return $this;
    }
}
