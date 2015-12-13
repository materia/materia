<?php

namespace Materia\Widget;

class Container extends BaseWidget
{
    protected $widgets;
    
    public function addWidget($widget)
    {
        $this->widgets[] = $widget;
    }
    
    public function getWidgets()
    {
        return $this->widgets;
    }
}
