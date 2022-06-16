<?php
class Car
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getCars()
  {
    $this->db->query('SELECT * FROM car');
    $result = $this->db->resultSet();
    return $result;
  }

  public function addCar($data)
  {
    $this->db->query('INSERT INTO car VALUES(:model, :name, :price, :image)');
    // Bind values
    $this->db->bind(':model', $data['model']);
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':image', $data['image']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}