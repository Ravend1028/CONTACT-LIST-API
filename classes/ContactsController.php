<?php

  class ContactsController extends ContactsModel {
    private $name;
    private $number;

    public function __construct($name, $number) {
      $this->name = $name;
      $this->number = $number;
    }

    public function createContact() {

      if ($this->emptyInput() == false) {
        // error handler
      }

      $query = $this->addToContacts($this->name, $this->number);
      $result = $query->rowCount();

      if($result > 0) {
        return $result;
      } else {
        // error handler
      }
    }

    // VALIDATIONS HERE: MUCH BETTER IF A LOT SECURED AND ROBUST?? OR YEA 
    // JUST FOR PRACTICE ONLY

    private function emptyInput() {
      if (empty($this->name) || empty($this->number)) {
        return true;
      } else {
        return false;
      }
    }

  }

?>