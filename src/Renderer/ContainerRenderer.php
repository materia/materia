<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\Container;

class ContainerRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(Container $container, $data = array())
    {
        $o = '<div';
        if ($container->getId()) {
            $o .= ' id="' . $container->getId() . '"';
        }
        $o .= ' class="container-fluid">';
        $o .= '##children##';
        $o .= '</div>';
        return $o;
    }
}
