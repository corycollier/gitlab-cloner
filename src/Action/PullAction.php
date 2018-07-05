<?php

namespace GitTools\Action;

use GitTools\Repository;

class PullAction extends AbstractAction implements ActionInterface
{
    const COMMAND = 'git pull origin %s';

    public function execute(Repository $repo) : ActionInterface
    {
        $branch = $repo->getCurrentBranch();
        $command = sprintf(self::COMMAND, $branch);

        $this->chdir($repo)->exec($command);
        return $this;
    }
}
