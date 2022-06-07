<?php
/*
* Base Controller
*Load model
*/
class Controller
{
  //load model
  public function model($model)
  {
    // Requere model file
    require_once '../app/models/' . $model . '.php';

    // Insetaite model
    return new $model();
  }

  // Load view
  public function view($view, $data = [])
  {
    // Check for view file 
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    } else {
      die('views does not exist');
    }
  }
}