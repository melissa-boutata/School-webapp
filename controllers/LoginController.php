<?php
include_once "models/LoginModel.php";
include_once "controllers/EspaceEtudController.php";
include_once "controllers/ProfilEtudController.php";
include_once "controllers/ProfilParentController.php";
include_once "controllers/ProfilEnseignantController.php";
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
    elseif($reslt == "Parent"){
          $controller = new ProfilParentController();
     
          $controller->afficherProfilParent();
    }elseif($reslt == "Enseignant"){
        $controller = new ProfilEnseignantController();
     
        $controller->afficherProfilEnseignant();
    }else
    {
         include "views/LoginUser.php";
    }
}


public function afficher()
{

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Etudiant')){
        $controller = new ProfilEtudController();
     
        $controller->afficherProfil();
    }elseif  ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Parent')){
        $controller = new ProfilParentController();
   
        $controller->afficherProfilParent();
  }
  elseif  ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Parent')){
    $controller = new ProfilParentController();

    $controller->afficherProfilParent();
}
elseif  ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Enseignant')){
    $controller = new ProfilEnseignantController();

    $controller->afficherProfilEnseignant();
}
    else{

    $this->view->entete();    
    $this->view->connexion();
    }
}

}



?>
