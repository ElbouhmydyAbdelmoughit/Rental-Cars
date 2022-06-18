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
    $this->db->query('INSERT INTO car (model, name, price, image) VALUES(:model, :name, :price, :image)');
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

  public function updateCar($data)
  {

    $this->db->query('UPDATE `car` SET `model` = :model, `name` = :name, `price` = :price, `image` = :image WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $data['id']);
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

  public function deleteCar($id)
  {
    $this->db->query('DELETE FROM car WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function getCarById($id)
  {
    $this->db->query('SELECT * FROM car WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }
}