<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\AppBar;

class AppBarRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(AppBar $bar, $data = array())
    {
        $html = $this->materia->renderTemplate(__DIR__ . '/AppBar.html.handlebars', $data);
        return $html;
    }
}
