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

  //=========== Add car to website ====================//
  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Condition for upload image 
      $file_image = $_FILES['image']['name'];
      $tmp_image = $_FILES['image']['tmp_name'];
      move_uploaded_file($tmp_image, $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'RentalCars/public/assets/img/' . $file_image);

      $data = [
        'model' => trim($_POST['model']),
        'name' => trim($_POST['name']),
        'price' => trim($_POST['price']),
        'image' => trim($_FILES['image']['name']),
        'user_id' => $_SESSION['user_id'],
        'model_err' => '',
        'name_err' => '',
        'price_err' => '',
        'image_err' => ''
      ];

      // validation
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
      if (empty($data['model_err']) && empty($data['name_err']) && empty($data['price_err']) && empty($data['image_err'])) {
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

  //=========== Delete car to website ====================//
  public function delete($id)
  {
    if ($this->carModel->deleteCar($id)) {
      flash('car_message', 'Car Removed');
      redirect('cars');
    } else {
      die('Something went wrong');
    }
  }

  //=========== Update car to website ====================//
  public function update($id)
  {

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

      $car = $this->carModel->getCarById($id);

      $data = [
        'id' => $id,
        'model' => $car->model,
        'name' => $car->name,
        'price' => $car->price,
        'image' => $car->image
      ];
      $this->view('cars/update', $data);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'id' => $id,
        'model' => trim($_POST['model']),
        'name' => trim($_POST['name']),
        'price' => trim($_POST['price']),
        'image' => trim($_FILES['image']['name']),
        'model_err' => '',
        'name_err' => '',
        'price_err' => '',
        'image_err' => ''
      ];
      // validation
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
      if (empty($data['model_err']) && empty($data['name_err']) && empty($data['price_err']) && empty($data['image_err'])) {
        // Validated and affich messages Car Added with function Flash
        if ($this->carModel->updateCar($data)) {
          flash('car_message', 'Car Updated');
          redirect('cars/index');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load views with errors
        $this->view('cars/update', $data);
      }
    } else {
      $data = [
        'model' => '',
        'name' => '',
        'price' => '',
        'image' => ''
      ];

      $this->view('cars/update', $data);
    }
  }
}