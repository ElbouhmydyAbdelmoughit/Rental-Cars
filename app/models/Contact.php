<?php
class Contact
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function createContact($data)
  {
    $this->db->query('INSERT INTO contact (name, email, subject, message) VALUES(:name, :email, :subject, :message)');
    // Bind values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':subject', $data['subject']);
    $this->db->bind(':message', $data['message']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}