<?php
class Admin extends Controller
{
  public function admin()
  {
    $data = [];
    $this->view('dashboard/admin', $data);
  }
}