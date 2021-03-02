<?php
include_once "views/ProfilParentView.php";
include_once "models/ProfilParentModel.php";
class ProfilParentController{
public $ProfilParentView;
public $ProfilParentModel;

public function __construct()
 {}

public function afficherProfilParent(){

   
    $ProfilParentModel= new ProfilParentModel();

    $data=$ProfilParentModel->getInfos();
 
    $ProfilParentView=new ProfilParentView();
    $ProfilParentView->entete();
    $ProfilParentView->navbar();
    $ProfilParentView->afficher($data);

}
}
?>

