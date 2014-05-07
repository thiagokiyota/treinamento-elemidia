<?php

namespace Elemidia;

class Folder extends AbstractFileSystem
{
    private $filhos = array();
    
    public function add(AbstractFileSystem $fileSystem)
    {
        $this->filhos[] = $fileSystem;
        
        return $this;
    }
    
    public function getName($profundidade)
    {              
        echo str_repeat('-', $profundidade) . $this->name . '<br>';
        
        foreach($this->filhos as $c) {                      
            $c->getName($profundidade + 1);
        }
    }      
}