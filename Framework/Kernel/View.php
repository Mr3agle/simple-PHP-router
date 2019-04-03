<?php

class View{

   protected $template;
   protected $controllerName;
   protected $params;
   
   public function __construct($controllerName, $params = array())
   {
      $this->controllerName = $controllerName;
      $this->params = $params;
      $this->render();
   }   
   protected function render()
   {
      if(class_exists($this->controllerName)){
         $fileName = str_replace('Controller', '', $this->controllerName);
         $this->template = $this->getContent($fileName);
         echo $this->template;
      }else{
         throw new Exception("Error: {$this->controllerName} doesn't exists");
         
      }
   }
   protected function getContent($fileName)
   {
       $filePath = ROOT."/".VIEWS ."$fileName.php";
       if (is_file($filePath)) {
           extract($this->params);
           ob_start();
           require($filePath);
           $template = ob_get_contents();
           ob_end_clean();
           return $template;
       } else {
           throw new Exception("Error: $filePath doesn't exists");
       }
   }
}