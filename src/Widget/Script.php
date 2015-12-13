<?php

namespace Materia\Widget;

class Script extends BaseWidget
{
    private $url;
    
    public function getUrl()
    {
        return $this->url;
    }
    
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
