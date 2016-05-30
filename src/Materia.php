<?php

namespace Materia;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;
use LightnCandy\LightnCandy;
use RuntimeException;

class Materia
{
    protected $urlGenerator;
    protected $themePath;
    
    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
        
        // Make themePath configurable
        $this->themePath = __DIR__ . '/../themes/bootstrap3';
    }
    
    protected $twig;
    
    public function setTwig($twig)
    {
        $this->twig = $twig;
    }
    
    public function renderWidget($widget)
    {
        $filename = get_class($widget) . '.hbs';
        $filename = str_replace('\\', '/', $filename);
    
        $filename = $this->themePath . '/' . $filename;
        if (!file_exists($filename)) {
            throw new RuntimeException("Can't find widget template: " . $filename);
        }
        $template = file_get_contents($filename);
        $helper = new Helper();
        $phpStr = LightnCandy::compile(
            $template,
            [
                'flags' => LightnCandy::FLAG_INSTANCE|LightnCandy::FLAG_METHOD,
                'helpers' => [
                    'route' => 'Materia\Helper::route'
                ]
            ]
        );
    
        $renderer = LightnCandy::prepare($phpStr);

        $data = ['widget' => $widget];
        $data['urlGenerator'] = $this->urlGenerator;
        $data['materia'] = $this;
        return $renderer($data);
    }
    
    public function getTwigResponse(View $view, $templateName)
    {
        if (!$this->twig) {
            throw new RuntimeException("Can't call getTwigResponse without calling setTwig()");
        }

        $data = $view->getData();
        
        $html = '';
        foreach ($view->getActions() as $action) {
            $html .= $this->renderWidget($action);
        }
        $data['materia_actions'] = $html;
        $data['materia_view'] = $view;


        $html = '';
        foreach ($view->getBreadcrumbs() as $action) {
            $html .= $this->renderWidget($action);
        }
        $data['materia_breadcrumbs'] = $html;
        
        $html = $this->twig->render($templateName, $data);
        $response = new Response($html);
        return $response;
    }
}
