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
}
