<?php
  if (isset($_POST['submit'])) {

    include('../../include/Autoloader.php');
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    // header('Access-Control-Allow-Methods: POST');
    // header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      // If the request method is not POST, return a 405 Method Not Allowed response
      header('HTTP/1.1 405 Method Not Allowed');
      echo json_encode(['message' => 'Method Not Allowed']);
      exit;
    }

    // COLLECT POST - (Im not sure if this is the right way to handle this)
    $name = $_POST['name'];
    $number = $_POST['number'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $contacts = new ContactsController($name, $number);
      $result = $contacts->createContact();
  
      if ($result > 0) {
        echo json_encode(
          array('message' => 'Contact Created')
        );
        
        header("Location: ../../pages/read.php");
      } else {
        echo json_encode(
          array('message' => 'Creation Failed')
        );
      }
  
    } else {
      // to do
    }
  }
  
?>