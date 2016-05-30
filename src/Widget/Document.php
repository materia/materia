<?php

namespace Materia\Widget;

class Document
{
    use ContainerTrait;
    
    protected $scripts = array();
    public function addScript(Script $script)
    {
        $this->scripts[] = $script;
    }
    public function getScripts()
    {
        return $this->scripts;
    }


    protected $styles = array();
    public function addStyle(Style $style)
    {
        $this->styles[] = $style;
    }
    public function getStyles()
    {
        return $this->styles;
    }
}
