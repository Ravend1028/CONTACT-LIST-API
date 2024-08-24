<?php

  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *'); // CORS
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

  $data = json_decode(file_get_contents("php://input"));

  $contacts = new ContactsController($data->name, $data->number);
  $result = $contacts->editContactViaJSON($data->id);

  if ($result > 0) {
    echo json_encode(
      array('message' => 'Update Success')
    );
  } else {
    echo json_encode(
      array('message' => 'Update Failed')
    );
  }
  
?>