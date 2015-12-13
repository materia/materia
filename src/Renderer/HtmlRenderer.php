<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\Html;

class HtmlRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(Html $html, $data = array())
    {
        $o = $html->getHtml();
        return $o;
    }
}
