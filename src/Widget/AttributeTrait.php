<?php

namespace Materia\Widget;

trait AttributeTrait
{
    protected $attibutes = [];
    
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
        return $this;
    }
    
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function getAttributeString()
    {
        $o = '';
        foreach ($this->attributes as $key => $value) {
            $o .= $key . '="' . $value . '" ';
        }
        return trim($o);
    }
}
