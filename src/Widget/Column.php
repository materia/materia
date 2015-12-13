<?php

namespace Materia\Widget;

class Column extends Container
{
    private $width;
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
}
