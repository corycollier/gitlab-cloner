<?php

namespace GitlabTools;

use GuzzleHttp\Client;

abstract class AbstractAction
{
    public function iterate(\DirectoryIterator $directory)
    {
        foreach ($directory as $path) {
            if ($path->isDot()) {
                continue;
            }
            echo $path->getPathname(), PHP_EOL;
            $this->action($path);
        }
    }

    abstract function action(\DirectoryIterator $path);

}
