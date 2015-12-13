<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\UniverseBar;

class UniverseBarRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(UniverseBar $bar, $data = array())
    {
        $html = $this->materia->renderTemplate(__DIR__ . '/UniverseBar.html.tpl', $data);
        return $html;
    }
}
