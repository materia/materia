<?php

namespace Materia\Widget\Grid;

use Doctrine\Common\Inflector\Inflector;
use Symfony\Component\Routing\Generator\UrlGenerator;

class Renderer
{
    protected $urlGenerator;
    
    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }
    
    public function render(Grid $grid, $rows = [])
    {
        $count = count($rows);
        if ($count == 0) {
            return $grid->getNoRowsMessage();
        }
        
        $o = '';
        $o .= '<h1>' . $grid->getCaption() . ' (' . $count . ')</h1>';
        $o .= '<table class="table">';
        $o .= '<tr>';
        foreach ($grid->getColumns() as $column) {
            $o .= '<th>' . $column->getLabel() . '</th>';
        }
        $o .= '</tr>';
        foreach ($rows as $row) {
            $o .= '<tr>';
            foreach ($grid->getColumns() as $column) {
                $o .= '<td>';
                $key = $column->getKey();
                $html = $this->getRowValue($row, $key);
                if ($column->getRouteName()) {
                    $parameters = $column->getRouteParameters();
                    if (count($parameters)>0) {
                        foreach ($parameters as $key => $value) {
                            $field = trim($value, '{}');
                            $parameters[$key] = $this->getRowValue($row, $field);
                        }
                    }
                    $html = '<a href="' . $this->urlGenerator->generate($column->getRouteName(), $parameters) . '">' . $html . '</a>';
                }
                $o .= $html;
                $o .= '</td>';
            }
            $o .= '</tr>';
        }
        $o .= '</table>';
        return $o;
    }
    
    public function getRowValue($row, $key)
    {
        if (is_array($row)) {
            return $row[$key];
        }
        
        $method = 'get' . Inflector::camelize($key);
        $value = $row->$method();
        return $value;
    }
}
