<?php

namespace GitTools;

class RepositoryFactory
{
    public function factory(\SplFileInfo $path) : Repository
    {
        return new Repository($path);
    }
}
