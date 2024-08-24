<?php

  include_once('config/Database.php');

  class ContactsModel extends Database {
    protected function getContacts() {
      $sql = "SELECT * FROM list";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();

      return $stmt;
    }

    protected function getOneContact($id) {
      $sql = "SELECT * FROM list WHERE id = ? LIMIT 1";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);

      return $stmt;
    }

    protected function addToContacts($name, $number) {
      $sql = "INSERT INTO list (name, number)
              VALUES (?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name, $number]);

      return $stmt;
    }

    protected function updateContacts($name, $number, $id) {
      $sql = "UPDATE list SET name = ?, number = ? WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name, $number, $id]);

      return $stmt;
    }

    protected function deleteToContacts() {
      
    }
  }

?>