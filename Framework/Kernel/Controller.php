<?php

abstract class Controller
{
   private $view;

   public function __construct(){
      
   }

   abstract public function run($param);

   protected function render($controller = '', $params = array())
   {
      $this->view = new View($controller, $params);
   } 
   
}