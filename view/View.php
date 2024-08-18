<?php

  class ContactsView extends ContactsModel {
    public function showContacts() {
      $result = $this->getContacts();
      $num = $result->rowCount();
      
    }
  }

?>