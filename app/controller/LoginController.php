<?php

class LoginController extends Controller{

   public function __construc()
   {
      
   }
   public function index($param)
   {
      $params = array("param"=>$param);
      $this->render(__CLASS__, $params);
   }
   public function run($param)
   {
      $this->index($param);
   }
}