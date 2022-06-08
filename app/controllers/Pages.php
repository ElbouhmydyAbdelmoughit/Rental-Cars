<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->postModel = $this->model('Car');
  }

  public function index()
  {
    $car = $this->postModel->getCar();

    $data = [
      'title' => 'Welcome',
      'cars' => $car
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }
}