<?php
  include('../../include/Autoloader.php');
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  $contacts = new ContactsView();
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

?>