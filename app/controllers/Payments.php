<?php
class Payments extends Controller
{
  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }
    $this->carModel = $this->model('Car');
    $this->paymentModel = $this->model('Payment');
  }


  public function Reserve($id)
  {
    $car = $this->carModel->getCarById($id);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      echo '<pre>';
      print_r($_POST);
      echo '<pre>';
      exit;
      $data = [
        'car' => $car
      ];

      $this->paymentModel->create_payment();
      $this->view('pages/payment', $data);
    } else {
      $data = [
        'car' => $car,
      ];

      $this->view('pages/payment', $data);
    }
  }
}