<?php

namespace Materia\Widget\Action;

use Materia\Widget\AttributeTrait;
use Materia\Widget\ClassNameTrait;

class SubmitAction  implements ActionInterface
{
    use AttributeTrait;
    use ClassNameTrait;
    
    public function __construct($label, $icon = null)
    {
        $this->setLabel($label);
        $this->setIcon($icon);
    }
    
    protected $label;
    public function getLabel()
    {
        return $this->label;
    }
    
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    
    protected $icon;
    
    public function getIcon()
    {
        return $this->icon;
    }
    
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
}
