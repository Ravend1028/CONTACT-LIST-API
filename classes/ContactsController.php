<?php

  class ContactsController extends ContactsModel {
    private $name;
    private $number;

    public function __construct($name = "", $number = "") {
      $this->name = $name;
      $this->number = $number;
    }

    public function createContact() {

      if ($this->emptyInput() == true) {
        echo "Input Cannot be empty.";
      }

      // DATA CLEANING IF APPLICABLE

      $query = $this->addToContacts($this->name, $this->number);
      $result = $query->rowCount();

      return $result;
    }

    //  for exposed url
    public function createContactViaJSON() {
      $query = $this->addToContacts($this->name, $this->number);
      $result = $query->rowCount();

      return $result;
    }


    // Validations Here:

    private function emptyInput() {
      if (empty($this->name) || empty($this->number)) {
        return true;
      } else {
        return false;
      }
    }

  }

?>