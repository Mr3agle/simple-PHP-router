<?php

class Controller
{
   private $view;

   public function __construct(){
      echo __CLASS__.' instantiated';
   }

   public function run($param = '')
   {
      echo "<br> Running method <br>";
      echo "param: $param";
   }
}