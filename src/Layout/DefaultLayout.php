<?php

namespace Materia\Layout;


use Materia\Widget\Html;
use Materia\Widget\Document;
use Materia\Widget\Script;
use Materia\Widget\Style;
use Materia\Widget\AppBar;
use Materia\Widget\Container;
use Materia\Widget\Row;
use Materia\Widget\Column;
use Materia\Widget\UniverseBar;
use Materia\Renderer\PageRenderer;

class DefaultLayout
{
    public function getDocument()
    {
        $document = new Document();
        
        /*
        $script = new Script();
        $script->setUrl('/assets/bower/jquery/dist/jquery.min.js');
        $document->addScript($script);
        */
        $style = new Style();
        //$style->setUrl('/css/bootstrap.min.css');
        $style->setUrl('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        $document->addStyle($style);
        /*
        $style = new Style();
        $style->setUrl('/assets/bower/font-awesome/css/font-awesome.min.css');
        $document->addStyle($style);
        */
        
        $style = new Style();
        $style->setUrl('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css');
        $document->addStyle($style);

        $style = new Style();
        $style->setUrl('/style.css');
        $document->addStyle($style);
        
        $bar = new UniverseBar();
        $bar->setTitle('My Universe');
        $document->addWidget($bar);

        $bar = new AppBar();
        $bar->setTitle('My App');
        $document->addWidget($bar);
        
        $container = new Container();
        
        $row = new Row();
        
        $column = new Column();
        $column->setWidth(2);
        
        $html = new Html();
        
        $html->setHtml('SIDEBAR');
        $column->setId('sidebar');
        $column->addWidget($html);
        $row->addWidget($column);
        
        $column = new Column();
        $column->setId('main');
        $column->setWidth(10);
        
        $html = new Html();
        $html->setId('content');
        $html->setHtml('CONTENT');
        $column->addWidget($html);
        $row->addWidget($column);
        
        $container->addWidget($row);
        $document->addWidget($container);
        //print_r($document);exit();

        
        $html = new Html();
        $html->setHtml('Cool random bit of html!');
        $document->addWidget($html);
        
        return $document;
    }
}
