
<?php
//Registrar las funciones dadas como implementación de __autoload()
spl_autoload_register(function ($class)
{
   $kernel = KERNEL;
   if(is_file(KERNEL."$class.php")){
      require KERNEL."$class.php";
   }else{
      echo "File $kernel $class not Found";
   }
});