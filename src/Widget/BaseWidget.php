<?php

namespace Materia\Widget;

abstract class BaseWidget
{
    protected $id;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    
    public function getWidgetById($id)
    {
        if (!method_exists($this, 'getWidgets')) {
            return null;
        }
        foreach ($this->getWidgets() as $child) {
            if ($child->getId()==$id) {
                return $child;
            }
            $w = $child->getWidgetById($id);
            if ($w) {
                return $w;
            }
        }
        return null;
    }
    
}
