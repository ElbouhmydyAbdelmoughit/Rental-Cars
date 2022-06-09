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

  public function about()
  {
    // $data = [
    //   'title' => 'About Us'
    // ];

    $this->view('pages/about');
  }
}