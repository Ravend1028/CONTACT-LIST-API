<?php

  class ContactsView extends ContactsModel {
    private $limit;

    public function __construct($limit = 0) {
      $this->limit = $limit;
    }

    public function showContacts() {
      $query = $this->getContacts();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    public function showOneContact($id) {
      $query = $this->getOneContact($id);
      $result = $query->fetch(PDO::FETCH_ASSOC);

      return $result;
    }
  }

?>