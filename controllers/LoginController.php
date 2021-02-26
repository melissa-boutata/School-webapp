<?php
include_once "models/LoginModel.php";
include_once "controllers/EspaceEtudController.php";
include_once "controllers/ProfilEtudController.php";

class LoginController {
public $model;
public function __construct()
    {
        $this->model = new LoginModel();
    }
public function invoke()
{
 
    $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
 
    if($reslt == "ID_student")
    {
          $controller = new ProfilEtudController();
     
          $controller->afficherProfil(); 
       
    }
    elseif($reslt == "ID_ens"){
        include "views/Afterlogin.php";
    }elseif($reslt == "ID_parent"){
        include "views/Afterlogin.php";
    }else
    {
         include "views/LoginView.php";
    }
}
}
?>
