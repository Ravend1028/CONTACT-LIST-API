<?php

  class ContactsModel extends Database {
    protected function getContacts() {
      $sql = "SELECT * FROM list";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();

      return $stmt;
    }

    protected function addToContacts() {
      
    }

    protected function updateContacts() {
      
    }

    protected function deleteToContacts() {
      
    }
  }

?>