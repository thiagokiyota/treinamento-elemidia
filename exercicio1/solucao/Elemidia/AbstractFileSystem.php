<?php

namespace Elemidia;

abstract class AbstractFileSystem
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    abstract public function getName($profundidade);
}