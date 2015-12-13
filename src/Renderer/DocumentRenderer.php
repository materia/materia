<?php
namespace Materia\Renderer;

use Materia\Materia;
use Materia\Widget\Document;

class DocumentRenderer
{
    private $materia;
    public function __construct(Materia $materia)
    {
        $this->materia = $materia;
    }
    
    public function render(Document $document, $data = array())
    {
        $data['styles'] = $document->getStyles();
        $data['scripts'] = $document->getScripts();
        
        $html = $this->materia->renderTemplate(__DIR__ . '/Document.html.handlebars', $data);
        return $html;
    }
}
