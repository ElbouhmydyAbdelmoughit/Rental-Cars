<?php

class Pages extends Controller
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
    $cars = $this->carModel->getCars();
    $data = [
      'title' => 'Welcome To YOUCAR Website, Rent Your Best Car.',
      'cars' => $cars
    ];

    $this->view('pages/index', $data);
  }
}