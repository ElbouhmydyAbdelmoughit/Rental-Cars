<?php

class Payment
{
  public function __construct()
  {
    $this->db = new Database;
  }

  public function create_payment($data)
  {
    $this->db->query('INSERT INTO client (cin, name, email, phone, address, date_birth, payment_method, delivery_method, card_number, card_holder, cvc, expiry_month, expiry_year) VALUES(:cin, :name, :email, :phone, :address, :date_birth, :payment_method, :delivery_method, :card_number, :card_holder, :cvc, :expiry_month, :expiry_year)');
    // Bind values
    $this->db->bind(':cin', $data['cin']);
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':date_birth', $data['date']);
    $this->db->bind(':payment_method', $data['payment']);
    $this->db->bind(':delivery_method', $data['delivery']);
    $this->db->bind(':card_number', $data['card_number']);
    $this->db->bind(':card_holder', $data['card_holder']);
    $this->db->bind(':cvc', $data['cvc']);
    $this->db->bind(':expiry_month', $data['expiry_month']);
    $this->db->bind(':expiry_year', $data['expiry_year']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}