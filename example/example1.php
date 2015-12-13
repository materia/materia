<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Materia\Materia;


switch ($_SERVER['REQUEST_URI']) {
    case '/css/bootstrap.min.css':
        $filename = __DIR__ . '/../web/assets/bower/bootstrap/dist/css/bootstrap.min.css';
        echo file_get_contents($filename);
        break;
        
    case '/style.css':
        $parser = new Less_Parser();

        $filename = __DIR__ . '/../assets/style.less';
        //$parser->parseFile($filename, $app['parameters']['baseurl']);
        $parser->parseFile($filename);
        header('Content-Type: text/css');
        echo $parser->getCss();
        exit();
        break;
}


$layout = new \Materia\Layout\DefaultLayout();
$document = $layout->getDocument();

$materia = new Materia();
$materia->register('Materia\\Widget\\Document', new \Materia\Renderer\DocumentRenderer($materia));
$materia->register('Materia\\Widget\\Html', new \Materia\Renderer\HtmlRenderer($materia));
$materia->register('Materia\\Widget\\UniverseBar', new \Materia\Renderer\UniverseBarRenderer($materia));
$materia->register('Materia\\Widget\\AppBar', new \Materia\Renderer\AppBarRenderer($materia));
$materia->register('Materia\\Widget\\Row', new \Materia\Renderer\RowRenderer($materia));
$materia->register('Materia\\Widget\\Column', new \Materia\Renderer\ColumnRenderer($materia));
$materia->register('Materia\\Widget\\Container', new \Materia\Renderer\ContainerRenderer($materia));

$data = array(
    'name' => 'hello'
);

echo $materia->render($document, $data);
