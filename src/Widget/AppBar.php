<?php

namespace Materia\Widget;

class AppBar  extends BaseWidget
{
    protected $title;
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}
