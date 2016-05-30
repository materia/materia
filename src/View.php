<?php

namespace Materia;

use Materia\Widget\Action\ActionInterface;

class View
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
    
    protected $data = [];
    
    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }
    
    public function getData()
    {
        return $this->data;
    }
    
    protected $actions = [];
    
    public function addAction(ActionInterface $action)
    {
        $this->actions[] = $action;
    }
    
    public function getActions()
    {
        return $this->actions;
    }
    
    protected $breadcrumbs = [];
    
    public function addBreadcrumb(Breadcrumb $breadcrumb)
    {
        $this->breadcrumbs[] = $breadcrumb;
    }
    
    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }
    
    protected $formUrl;
    public function setFormUrl($formUrl)
    {
        $this->formUrl = $formUrl;
        return $this;
    }
    
    public function getFormUrl()
    {
        return $this->formUrl;
    }
    
    /*
    public function createAction($label, $route, $routeParameters = [], $icon = null)
    {
        $action = new Action();
        $action->setLabel($label);
        $action->setRoute($route, $routeParameters);
        $action->setIcon($icon);
        $this->addAction($action);
        return $action;
    }
    */
}
