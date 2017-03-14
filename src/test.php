<?php
require 'vendor/autoload.php';

use \GitlabTools\Cloner;
use \GitlabTools\FetchAction;
use \GitlabTools\PullAction;
use \GitlabTools\GarbageCollectionAction;
use \GitlabTools\PruneOriginAction;

//
// $app = new Cloner([
//     'server'    => 'https://gitlab.floridahospital.org',
//     'token'     => 'szssBPW4k-pY71WwNkUC',
//     'group'     => 'consumer-web',
//     'directory' => '/home/cory/Repositories/'
// ]);
// $app->getRepos();

$action = new PullAction;
$action->iterate(new \DirectoryIterator('/home/cory/Repositories'));
