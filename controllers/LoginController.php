<?php
include_once "models/LoginModel.php";
class LoginController {
public $model;
public function __construct()
    {
        $this->model = new LoginModel();
    }
public function invoke()
{
    $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
    if($reslt == "login")
    {
    include "views/Afterlogin.php";
    }
    else
    {
    include "views/LoginView.php";
    }
    }
}
?>

