<?php

require 'Framework/config.php';
require 'Framework/Kernel/autoload.php';

$route = new Route();

echo '<pre>';
print_r($route->getUri());
echo '</pre>';

$controller = $route->getController();
$method = $route->getMethod();
$param = $route->getParam();

echo "Controller: {$controller} <br>";
echo "Metodo: {$method} <br>";
echo "Param: {$param} <br>";


$controllerObj = new $controller();

$controllerObj->$method($param); 