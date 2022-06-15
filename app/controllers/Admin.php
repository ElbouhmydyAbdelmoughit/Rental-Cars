<?php
class Admin extends Controller
{
  public function index()
  {
    $data = [];
    // Load views admin index
    $this->view('admin/index', $data);
  }
}