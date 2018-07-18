<?php

namespace GitTools;

class RepositoryIterator extends \DirectoryIterator
{
    public function isRepository() : bool
    {
        $iterator = $this->current();
        if ($iterator->isFile()) {
            return false;
        }

        $directory = new \DirectoryIterator($iterator->getPathname());
        foreach ($directory as $path) {
            if ($path->getFilename() == '.git') {
                return true;
            }
        }
        return false;
    }
}
