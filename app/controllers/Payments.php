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
      //========== variables ==============// 
      $data = [
        'car' => $car,
        'cin' => trim($_POST['cin']),
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'address' => trim($_POST['address']),
        'date' => trim($_POST['date']),
        'payment' => trim($_POST['payment_method']),
        'card_number' => trim($_POST['card_number']),
        'card_holder' => trim($_POST['card_holder']),
        'cvc' => trim($_POST['cvc']),
        'expiry_month' => trim($_POST['expiry_month']),
        'expiry_year' => trim($_POST['expiry_year']),
        'cin_err' => '',
        'name_err' => '',
        'email_err' => '',
        'phone_err' => '',
        'address_err' => '',
        'date_err' => '',
        'payment_err' => '',
        'card_number_err' => '',
        'card_holder_err' => '',
        'cvc_err' => '',
        'expiry_month_err' => '',
        'expiry_year_err' => '',
      ];

      var_dump($data);
      exit;
      //============== Validation ===============//
      // validation CIN
      if (empty($data['cin'])) {
        $data['cin_err'] = 'Pleae enter CIN';
      }

      // Validation Name
      if (empty($data['name'])) {
        $data['name_err'] = 'Pleae enter Name';
      }

      // Validation Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Pleae enter Email';
      }

      // Validation Phone
      if (empty($data['phone'])) {
        $data['phone_err'] = 'Pleae enter Phone';
      }

      // Validation Address
      if (empty($data['address'])) {
        $data['address_err'] = 'Pleae enter Address';
      }

      // Validation Name
      if (empty($data['date'])) {
        $data['date_err'] = 'Pleae enter Date';
      }

      // Validation Method Payment  Cash or Card 
      if (!empty($data['payment'])) {
        if ($data['payment'] == 'card') {
          // Validation Card Number
          if (empty($data['card_number'])) {
            $data['card_number_err'] = 'Pleae enter Card Number';
          }

          // Validation Card Holder
          if (empty($data['card_holder'])) {
            $data['card_holder_err'] = 'Pleae enter Card Holder';
          }

          // Validation CVC
          if (empty($data['cvc'])) {
            $data['cvc_err'] = 'Pleae enter CVC';
          }

          // Validation Expiry Month
          if (empty($data['expiry_month'])) {
            $data['expiry_month_err'] = 'Pleae enter Expiry Month';
          }

          // Validation Expiry Year
          if (empty($data['expiry_year'])) {
            $data['expiry_year_err'] = 'Pleae enter Expiry Year';
          }
        }
      } else {
        $data['payment_err'] = 'Please Enter Payment Methd';
      }



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