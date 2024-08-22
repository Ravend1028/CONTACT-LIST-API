<?php

  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  // COLLECT POST - (Im not sure if this is the right way to handle this)

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contacts = new ContactsController(); // takes an argument
    $result = $contacts->createContact(); // will return a result

  } else {
    // to do
  }
  
  

?>