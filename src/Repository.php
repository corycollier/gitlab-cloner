<?php

namespace GitTools;


class Repository
{
    const CMD_GET_CURRENT_BRANCH = "git rev-parse --abbrev-ref HEAD";

    protected $path;

    public function __construct(\SplFileInfo $path)
    {
        $this->setPath($path);
    }

    public function getPath() : \SplFileInfo
    {
        return $this->path;
    }

    public function setPath(\SplFileInfo $path) : Repository
    {
        $this->path = $path;
        return $this;
    }

    public function getCurrentBranch()
    {
        $branch = trim(shell_exec(self::CMD_GET_CURRENT_BRANCH));
        return $branch;
    }
}
