<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{

     public object $model;

     public function __construct()
     {

          $this->model = new \App\Models\Login();
     }

     public function index()
     {
          $this->login('login/index');
     }

     public function proses()
     {
          $row  = $this->model->proses();

          if (!empty($row)) {
               $_SESSION['login'] = true;
               $_SESSION['user_nama'] = $row['user_nama'];
               $_SESSION['user_role'] = $row['user_role'];
               header('location:' . URL . '/dashboard');
          } else {
               $_SESSION['login'] = false;
               header('location:' . URL);
          }
     }
}
