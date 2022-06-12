<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'Welcome To YOUCAR Website, Rent Your Best Car.',
    ];

    $this->view('pages/index', $data);
  }

  public function payment()
  {
    $data = [
      'title' => 'Payment'
    ];

    $this->view('payment', $data);
  }
}
