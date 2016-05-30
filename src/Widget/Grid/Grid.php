<?php

namespace Materia\Widget\Grid;

class Grid
{
    protected $caption;
    
    public function getCaption()
    {
        return $this->caption;
    }
    
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
    
    public function addColumn(Column $column)
    {
        $this->columns[$column->getKey()] = $column;
    }
    
    public function getColumns()
    {
        return $this->columns;
    }
    
    protected $noRowsMessage = "No rows";
    
    public function getNoRowsMessage()
    {
        return $this->noRowsMessage;
    }
    
    public function setNoRowsMessage($noRowsMessage)
    {
        $this->noRowsMessage = $noRowsMessage;
        return $this;
    }
    
}
