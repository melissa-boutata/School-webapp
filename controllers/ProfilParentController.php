<?php
include_once "views/ProfilParentView.php";
include_once "models/ProfilParentModel.php";
include_once "views/LoginUser.php";

class ProfilParentController{
public $ProfilParentView;
public $ProfilParentModel;

public function __construct()
 {}

public function afficherProfilParent(){

if(session_status() == PHP_SESSION_NONE){
        session_start();
}
    
 if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Parent')){

    $ProfilParentModel= new ProfilParentModel();

    $data=$ProfilParentModel->getInfos();
 
    $ProfilParentView=new ProfilParentView();
    $ProfilParentView->entete();
    $ProfilParentView->navbar();
    $ProfilParentView->afficher($data);
} else {
      
    $LoginView= new LoginUser();
    $LoginView->entete();    
    $LoginView->connexion();
}
}
}
?>
