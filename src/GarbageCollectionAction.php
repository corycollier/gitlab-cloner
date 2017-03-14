<?php

namespace GitlabTools;

class GarbageCollectionAction extends AbstractAction
{
    const COMMAND = 'git gc --auto';

    public function action(\DirectoryIterator $path)
    {
        chdir($path->getPathname());
        exec('git gc --auto');
    }
}
