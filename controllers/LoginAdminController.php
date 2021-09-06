<?php
include_once "models/LoginAdminModel.php";
include_once "views/LoginAdminView.php";

class LoginAdminController {
public $model;
public $LoginView;
public function __construct()
    {
        $this->model = new LoginAdminModel();
    }
public function login()
{
    $reslt = $this->model->getlogin();  
 
    if($reslt == "Admin")
    {
        header("Location: /ProjetWeb/AdminPanel");
    }
    else{
        header("Location: /ProjetWeb/AdminLogin");
    }
}
public function afficher()
{
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
        header("Location: /ProjetWeb/AdminPanel");
    }
    else{
        $this->LoginView= new LoginAdminView();
        $this->LoginView->entete();
        $this->LoginView->connexion();
    }
}
}
?>
