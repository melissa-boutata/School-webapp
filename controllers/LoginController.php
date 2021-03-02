<?php
include_once "models/LoginModel.php";
include_once "controllers/EspaceEtudController.php";
include_once "controllers/ProfilEtudController.php";
include_once "views/LoginUser.php";
class LoginController {
public $model;
public $view;
public function __construct()
    {
    
        $this->view= new LoginUser();
  
        $this->model = new LoginModel();
    }
public function invoke()
{
 
    $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
    if($reslt == "Etudiant")
    {
       
          $controller = new ProfilEtudController();
     
          $controller->afficherProfil(); 

    }
    elseif($reslt == "Enseignant"){
        include "views/Afterlogin.php";
    }elseif($reslt == "Parent"){
        header("Location: /ProjetWeb/ProfilParent");
    }else
    {
         include "views/LoginUser.php";
    }
}


public function afficher()
{

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    
    /*if ($valid_session ){
            //We call a new URL //localhost/ProjetWeb/adminpannel
            header("Location: /ProjetWeb/Admin");
    }*/
 
    $this->view->entete();    
    $this->view->connexion();
}

}



?>
