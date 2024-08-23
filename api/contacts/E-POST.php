<?php

  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

  $data = json_decode(file_get_contents("php://input"));

  $contacts = new ContactsController($data->name, $data->number);
  $result = $contacts->createContactViaJSON();

  if ($result > 0) {
    echo json_encode(
      array('message' => 'Creation Success')
    );
  } else {
    echo json_encode(
      array('message' => 'Creation Failed')
    );
  }

?>