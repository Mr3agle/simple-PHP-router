<?php

require 'Framework/config.php';
require 'Framework/Kernel/autoload.php';

$route = new Route();

$controller = $route->getController();
$method = $route->getMethod();
$param = $route->getParam();

require PATH_CONTROLLER."{$controller}Controller.php";
$controller.= 'Controller';
$controllerObj = new $controller();

$controllerObj->$method(); 