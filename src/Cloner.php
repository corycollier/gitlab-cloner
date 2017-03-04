<?php

namespace GitlabTools;

use GuzzleHttp\Client;

class Cloner
{
    protected $server;
    protected $token;
    protected $group;
    protected $directory;

    public function __construct($options = [])
    {
        $defaults = [
            'server'    => 'https://gitlab.com',
            'token'     => '',
            'group'     => '',
            'directory' => '/'
        ];
        $options = array_merge($defaults, $options);
        $this->setProperties($options);
    }

    protected function setProperties($properties)
    {
        foreach ($properties as $name => $value) {
            $this->$name = $value;
        }
    }

    protected function getClient()
    {
        return new Client;
    }

    protected function getProjectSearchUrl($page = 1)
    {
        $pattern = '%s/api/v3/projects/search/%s?private_token=%s&page=%d&max=100';
        return sprintf($pattern, $this->server, $this->group, $this->token, $page);
    }

    protected function getRepositoryDirectory()
    {
        return $this->repositoryDirectory;
    }

    public function getRepos()
    {
        chdir($this->directory);
        $client = $this->getClient();
        $pages  = range(1, 5);
        foreach ($pages as $page) {
            $response = $client->request('GET', $this->getProjectSearchUrl($page));
            $projects = json_decode($response->getBody());
            $this->cloneProjects($projects);
        }
    }

    protected function cloneProjects($projects)
    {
        foreach ($projects as $project) {
            $this->cloneProject($project);
        }
    }

    protected function cloneProject($project)
    {
        try {
            exec('git clone ' .  $project->http_url_to_repo);
        } catch (Exception $exception) {
            error_log($exception->getMessage());
        }
    }
}
