<?php

namespace GitlabTools;

class FetchAction extends AbstractAction
{
    const COMMAND = 'git fetch --all';

    public function action(\DirectoryIterator $path)
    {
        chdir($path->getPathname());
        exec('git fetch --all');
    }
}
