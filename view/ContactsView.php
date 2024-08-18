<?php

  class ContactsView extends ContactsModel {
    private $limit;

    public function __construct() {
      $this->limit = 0;
    }

    public function showContacts() {
      $query = $this->getContacts();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }
  }

?>