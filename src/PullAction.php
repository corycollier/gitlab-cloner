<?php

namespace GitlabTools;

class PullAction extends AbstractAction
{
    const COMMAND = 'git fetch --all';

    public function action(\DirectoryIterator $path)
    {
        chdir($path->getPathname());
        exec('git pull');
    }
}
