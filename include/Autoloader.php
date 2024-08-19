<?php
 
  spl_autoload_register('my_autoloader');
 
  function my_autoloader($classname) {
    include '../../classes/' . $classname . '.php';
  }

?>