<?php

class Contacts  extends Controller
{
  public function __construct()
  {
    $this->contactModel = $this->model('Contact');
  }


  // ================== Function send mail to admin ================= //
  public function contactUs()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'subject' => trim($_POST['subject']),
        'message' => trim($_POST['message']),
        'name_err' => '',
        'email_err' => '',
        'subject_err' => '',
        'message_err' => '',
      ];

      //=============== validation ==============//
      //========== Name ===============//
      if (empty($data['name'])) {
        $data['name_err'] = 'Please Enter Name';
      }
      //========== Name ===============//
      if (empty($data['email'])) {
        $data['email_err'] = 'Please Enter email';
      }
      //========== Name ===============//
      if (empty($data['subject'])) {
        $data['subject_err'] = 'Please Enter subject';
      }
      //========== Name ===============//
      if (empty($data['message'])) {
        $data['message_err'] = 'Please Enter message';
      }

      // Check variables errors
      if (empty($data['name_err']) && empty($data['email_err']) && empty($data['subject_err']) && empty($data['message_err'])) {


        if ($this->contactModel->createContact($data)) {
          flash('contact_message', 'Contact Send');
          redirect('#contact');
        } else {
          die('Something went wrong');
        }
      } else {
        $this->view('pages/index', $data);
      }
    } else {

      $data = [
        'name' => '',
        'email' => '',
        'subject' => '',
        'message' => '',
        'name_err' => ''
      ];

      $this->view('home', $data);
    }
  }
}