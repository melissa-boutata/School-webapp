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
        header("Location: /ProjetWeb/Admin");
    }
}
public function afficher()
{
    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    
    if ($valid_session &&  $_SESSION["type"] != "Admin"){
            //We call a new URL //localhost/ProjetWeb/adminpannel
            header("Location: /ProjetWeb/Admin");
    }
    else {
    $LoginView= new LoginAdminView();
    $LoginView->entete();    
    $LoginView->connexion();
    }
}
}
?>
