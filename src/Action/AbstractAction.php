<?php

namespace GitTools\Action;

use GitTools\Repository;

abstract class AbstractAction
{
    protected function exec($command)
    {
        exec($command);
    }

    protected function chdir(Repository $repo) : AbstractAction
    {
        $location = $repo->getPath()->getPathname();
        chdir($location);
        return $this;
    }
}
