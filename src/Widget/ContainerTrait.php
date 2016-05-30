<?php

namespace Materia\Widget;

trait ContainerTrait
{
    protected $children;
    
    public function addChild($child)
    {
        $this->children[] = $child;
    }
    
    public function getChildren()
    {
        return $this->children;
    }
}
