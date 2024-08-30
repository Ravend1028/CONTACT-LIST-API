<?php
  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    // If the request method is not POST, return a 405 Method Not Allowed response
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['message' => 'Method Not Allowed']);
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $contacts = new ContactsView();

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = $contacts->showOneContact($id);
      $rowCount = count($result);

      if($rowCount > 0) {
        echo json_encode($result);
      } else {
        echo json_encode(
          array('message' => 'No Contact with that ID Found')
        );
      }
    } else {
      $rows = $contacts->showContacts();
      $rowCount = count($rows);

      if($rowCount > 0) {
        $contacts = array();
        
        foreach($rows as $row) {
          array_push($contacts, $row);
        }

        echo json_encode($contacts);
        } else {
          echo json_encode(
            array('message' => 'No Contacts Found')
          );
      }
    } 
    
  } else {
    // maybe header or error message?
  }

?>