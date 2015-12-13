<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\Column;

class ColumnRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(Column $column, $data = array())
    {
        $o = '<div';
        if ($column->getId()) {
            $o .= ' id="' . $column->getId() . '"';
        }
        $o .= ' class="col-md-' . $column->getWidth() . '">';
        $o .= '##children##';
        $o .= '</div>';
        return $o;
    }
}
