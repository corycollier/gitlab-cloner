<?php
namespace GitTools;
require 'vendor/autoload.php';


use GitTools\RepositoryIterator;
use GitTools\RepositoryFactory;
use GitTools\Strategy\FetchAndPullStrategy;
use GitTools\Strategy\CleanUpStrategy;

//
// $app = new Cloner([
//     'server'    => 'https://code.clwtr.com',
//     'token'     => 'szssBPW4k-pY71WwNkUC',
//     'group'     => 'consumer-web',
//     'directory' => '/Users/corycollier/Repositories'
// ]);
// $app->getRepos();


$iterator = new RepositoryIterator('/Users/corycollier/Repositories');
$strategy = new CleanUpStrategy();
$factory = new RepositoryFactory();
foreach ($iterator as $directory) {
    if ($iterator->isRepository()) {
        $repo = $factory->factory($directory);
        $strategy->execute($repo);
    }
}
