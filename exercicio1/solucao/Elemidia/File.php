<?php

namespace Elemidia;

class File extends AbstractFileSystem
{
    public function getName($profundidade)
    {
        echo str_repeat('-', $profundidade) . $this->name . '<br>';
    }
}