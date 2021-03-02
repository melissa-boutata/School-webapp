<?php
include_once "views/ProfilEnfantView.php";
include_once "models/ProfilEnfantModel.php";

class ProfilEnfantController{
public $ProfilView;
public $ProfilModel;

public function __construct()
 {}

public function afficherProfil($id){

    $ProfilModel= new ProfilEnfantModel();

    $data=$ProfilModel->getInfos($id);
    $data[0];
    $edt= array(); 
    $dimanche=$ProfilModel->getEdtByDay($data[11],"Dimanche");
    array_push($edt,$dimanche);
    $lundi=$ProfilModel->getEdtByDay($data[11],"Lundi");
    array_push($edt,$lundi);
    $mardi=$ProfilModel->getEdtByDay($data[11],"Mardi");
    array_push($edt,$mardi);
    $mercredi=$ProfilModel->getEdtByDay($data[11],"Mercredi");
    array_push($edt,$mercredi);
    $jeudi=$ProfilModel->getEdtByDay($data[11],"Jeudi");
    array_push($edt,$jeudi);

    $notes=$ProfilModel->getNotes($data[0]);
    $activites=$ProfilModel->getActivites($data[0]);
 
    $ProfilView=new ProfilEnfantView();
    $ProfilView->entete();
    $ProfilView->afficher($data,$edt,$notes,$activites);
}
}
?>

