<?php

namespace GitTools\Strategy;

use GitTools\Repository;
use GitTools\Action\ActionInterface;

abstract class AbstractStrategy
{
    protected $actions = [];

    public function addActions(array $actions) : AbstractStrategy
    {
        foreach ($actions as $action) {
            $this->addAction($action);
        }
        return $this;
    }

    public function addAction(ActionInterface $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    public function getActions() : array
    {
        return $this->actions;
    }

    public function execute(Repository $repo)
    {
        $actions = $this->getActions();
        foreach ($actions as $action) {
            $action->execute($repo);
        }
    }
}
