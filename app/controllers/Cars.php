<?php
class Cars extends Controller
{
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }
    $this->carModel = $this->model('Car');
  }

  public function index()
  {
    // Get cars
    $cars = $this->carModel->getCars();

    $data = [
      'cars' => $cars
    ];
    // Load views cars index
    $this->view('cars/index', $data);
  }


  public function add()
  {
    $data = [];
    $this->view('cars/add', $data);
  }
  public function delete()
  {
    $data = [];
    $this->view('cars/delete', $data);
  }
  public function update()
  {
    $data = [];
    $this->view('cars/update', $data);
  }
}
