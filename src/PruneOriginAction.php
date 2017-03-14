<?php

namespace GitlabTools;

class PruneOriginAction extends AbstractAction
{
    const COMMAND = 'git remote prune origin';

    public function action(\DirectoryIterator $path)
    {
        chdir($path->getPathname());
        exec('git remote prune origin');
    }
}
