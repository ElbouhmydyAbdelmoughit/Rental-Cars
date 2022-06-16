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

  // Add car to website
  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'model' => trim($_POST['model']),
        'name' => trim($_POST['name']),
        'price' => trim($_POST['price']),
        'image' => trim($_POST['image']),
        'user_id' => $_SESSION['user_id'],
        'model_err' => '',
        'name_err' => '',
        'price_err' => '',
        'image_err' => ''
      ];

      //  validation
      if (empty($data['model'])) {
        $data['model_err'] = 'Please enter Model';
      }
      if (empty($data['name'])) {
        $data['name_err'] = 'Please Enter Name';
      }
      if (empty($data['price'])) {
        $data['price_err'] = 'Please Enter Price';
      }
      if (empty($data['image'])) {
        $data['image_err'] = 'Please Enter Image';
      }


      // Mack sur no errors
      if (empty($data['model']) && empty($data['name']) && empty($data['price']) && empty($data['image'])) {

        // Validated and affich messages Car Added with function Flash 
        if ($this->carModel->addCar($data)) {
          flash('car_message', 'Car Added');
          redirect('cars/index');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load views with errors
        $this->view('cars/add', $data);
      }
    } else {
      $data = [
        'model' => '',
        'name' => '',
        'price' => '',
        'image' => '',
      ];

      $this->view('cars/add', $data);
    }
  }

  // Delete car to website
  public function delete()
  {
    $data = [];
    $this->view('cars/delete', $data);
  }

  // Update car to website
  public function update()
  {
    $data = [];
    $this->view('cars/update', $data);
  }
}