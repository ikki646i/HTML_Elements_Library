<?php
namespace ikki646i\App;

use \ikki646i\Github\Github;
use \ikki646i\MaterialDesign\Collection;

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
