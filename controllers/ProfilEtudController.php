<?php
include_once "views/ProfilEtud.php";
include_once "models/ProfilEtudModel.php";
include_once "views/LoginUser.php";

class ProfilEtudController{
public $ProfilView;
public $ProfilModel;

public function __construct()
 {}

public function afficherProfil(){
    
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Etudiant')){

        $ProfilModel= new ProfilEtudModel();

        $data=$ProfilModel->getInfos();
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
    
        $ProfilView=new ProfilEtud();
        $ProfilView->entete();
        $ProfilView->navbar();
        $ProfilView->afficher($data,$edt,$notes,$activites);
    } else {
      
        $LoginView= new LoginUser();
        $LoginView->entete();    
        $LoginView->connexion();
    }

}

}
?>