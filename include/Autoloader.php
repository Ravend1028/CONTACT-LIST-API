<?php

  spl_autoload_register('my_autoloader');

  function my_autoloader($class) {
    if(strpos(, )) {
      include 'view/' . $class . '.php';
    } else {

    }

    // will continue later
    
  }

  

?>