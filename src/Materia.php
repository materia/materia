<?php
namespace Materia;

use RuntimeException;
use LightnCandy\LightnCandy;

class Materia
{
    public function render($object, $data = array())
    {
        $html = '';
        $renderer = $this->getRendererByType($object);
        $html .= $renderer->render($object, $data);
        $o = '';
        
        if (is_a($object, 'Materia\\Widget\\Container')) {
            foreach ($object->getWidgets() as $widget) {
                $o .=  $this->render($widget, $data);
            }
        }
        $html = str_replace('##children##', $o, $html);
        return $html;
    }
    
    private $renderers = array();
    
    public function register($type, $renderer)
    {
        $this->renderers[$type] = $renderer;
    }
    
    public function getRendererByType($object)
    {
        foreach ($this->renderers as $name => $renderer) {
            if (is_a($object, $name)) {
                return $renderer;
            }
        }
        throw new RuntimeException("No renderer registered for class " . get_class($object));
    }
    
    public function renderTemplate($filename, $data = array())
    {
        $template = file_get_contents($filename);
        $phpStr = LightnCandy::compile($template, array('flags' => LightnCandy::FLAG_INSTANCE));
        $renderer = LightnCandy::prepare($phpStr);

        return $renderer($data);
    }
}
