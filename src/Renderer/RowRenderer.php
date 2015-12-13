<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\Row;

class RowRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(Row $row, $data = array())
    {
        $o = '<div class="row">';
        $o .= '##children##';
        $o .= '</div>';
        return $o;
    }
}
