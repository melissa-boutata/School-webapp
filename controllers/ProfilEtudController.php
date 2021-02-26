<?php
include_once "views/ProfilEtud.php";
include_once "models/ProfilEtudModel.php";
class ProfilEtudController{
public $ProfilView;
public $ProfilModel;

public function __construct()
 {}

public function afficherProfil(){

    $ProfilModel= new ProfilEtudModel();

    $data=$ProfilModel->getInfos();
    $ProfilView=new ProfilEtud();
    $ProfilView->entete();
    $ProfilView->afficher($data);
}
}
?>

