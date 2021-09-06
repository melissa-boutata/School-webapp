<?php
include_once "views/ProfilEnseignantView.php";
include_once "models/ProfilEnseignantModel.php";
class ProfilEnseignantController{
public $ProfilEnseignantView;
public $ProfilEnseignantModel;

public function __construct()
 {}

public function afficherProfilEnseignant(){

   
    $ProfilEnseignantModel= new ProfilEnseignantModel();

    $data=$ProfilEnseignantModel->getInfos();
 
    $ProfilEnseignantView=new ProfilEnseignantView();
    $ProfilEnseignantView->entete();
    $ProfilEnseignantView->navbar();
    $ProfilEnseignantView->afficher($data);

}
}
?>

