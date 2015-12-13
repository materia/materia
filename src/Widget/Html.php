<?php

namespace Materia\Widget;

class Html extends BaseWidget
{
    protected $html;
    
    public function getHtml()
    {
        return $this->html;
    }
    
    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }
}
