<?php

  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *'); // CORS
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

  $data = json_decode(file_get_contents("php://input"));

  $contacts = new ContactsController();
  $result = $contacts->deleteContactViaJSON($data->id);

  if ($result > 0) {
    echo json_encode(
      array('message' => 'Deleted Successfully')
    );
  } else {
    echo json_encode(
      array('message' => 'Deletion Failed')
    );
  }
  
?>