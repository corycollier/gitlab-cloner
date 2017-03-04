# Gitlab Tools
This project is designed to help clone and update repos hosted in gitlab, in bulk.

## Usage
```php
<?php
use \GitlabTools\Cloner;

$app = new Cloner([
    'server'    => 'https://gitlab.my-personal-domain.com',
    'token'     => 'my secret token that I got from gitlab',
    'group'     => 'consumer-web',
    'directory' => '/path/to/my/repositories''
]);
$app->getRepos();
```
