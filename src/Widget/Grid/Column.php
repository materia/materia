<?php

namespace Materia\Widget\Grid;

class Column
{
    
    public function __construct($key, $label)
    {
        $this->setKey($key);
        $this->setLabel($label);
    }
    
    protected $key;
    
    public function getKey()
    {
        return $this->key;
    }
    
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
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
    
    public function setRoute($routeName, $routeParameters = [])
    {
        $this->routeName = $routeName;
        $this->routeParameters = $routeParameters;
    }
    
    protected $routeName;
    protected $routeParameters = [];
    public function getRouteName()
    {
        return $this->routeName;
    }
    
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }
    
    public function getRouteParameters()
    {
        return $this->routeParameters;
    }
    
    public function setRouteParameters($routeParameters)
    {
        $this->routeParameters = $routeParameters;
        return $this;
    }
    
    
}
