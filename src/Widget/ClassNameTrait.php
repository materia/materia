<?php

namespace Materia\Widget;

trait ClassNameTrait
{
    protected $classNames = [];
    
    public function setClassName($className)
    {
        $this->classNames[$className] = $className;
        return $this;
    }
    
    public function getClassNames()
    {
        return $this->$classNames;
    }
    
    public function getClassNameString()
    {
        $o = '';
        foreach ($this->classNames as $className) {
            $o .= $className . ' ';
        }
        return trim($o);
    }
}
