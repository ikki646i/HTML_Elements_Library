<?php
namespace Elements\App;

use \Elements\Github\Github;
use \Elements\MaterialDesign\Collection;

class App
{
    public function __construct($token)
    {
        $github = new Github($token);
        $repositoryList = $github->gitRepositories();
        $this->collection = new Collection($repositoryList);
    }

    public function __toString()
    {
        return $this->collection->__toString();
    }
}
