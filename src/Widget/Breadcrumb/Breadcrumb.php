<?php

namespace Materia\Widget\Breadcrumb;

class Breadcrumb
{
    public function __construct($label, $route, $routeParameters = [], $icon = null)
    {
        $this->setLabel($label);
        $this->setRoute($route, $routeParameters);
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
    
    protected $route;
    protected $routeParameters;
    
    public function getRoute()
    {
        return $this->route;
    }
    
    public function getRouteParameters()
    {
        return $this->routeParameters;
    }
    
    public function setRoute($route, $parameters = [])
    {
        $this->route = $route;
        $this->routeParameters = $parameters;
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
