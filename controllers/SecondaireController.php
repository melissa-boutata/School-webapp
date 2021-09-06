<?php
include_once "views/SecondaireView.php";
include_once "models/SecondaireModel.php";
include_once "views/EnsSecondaireView.php";
include_once "views/EdtView.php";

class SecondaireController{
public $SecondaireView;
public $SecondaireModel;

public function __construct()
 {}

public function afficher(){

    $SecondaireModel= new SecondaireModel();
    $articles=$SecondaireModel->getSecondaireArticles();
    
    $SecondaireView=new SecondaireView();
    $SecondaireView->entete();
    $SecondaireView->menu();
    $SecondaireView->afficher($articles);
    $SecondaireView->piedsdepage();
}
public function ensSecondaire(){
    $SecondaireModel= new SecondaireModel();
    $ens = $SecondaireModel->getEnsSecondaire();

     $EnsSecondaireView=new EnsSecondaireView();
     $EnsSecondaireView->entete();
     $EnsSecondaireView->menu();
     $EnsSecondaireView->afficherEns($ens);
     $EnsSecondaireView->piedsdepage();
}
public function edtSecondaire(){  
    $SecondaireModel= new SecondaireModel();
    $classes=$SecondaireModel->getClasses("Secondaire");
    $allEdt= array(); 
    foreach($classes as $classe) {
    
        $edt= array(); 
        $dimanche=$SecondaireModel->getEdtByDay($classe["id_classe"],"Dimanche");
        array_push($edt,$dimanche);
        $lundi=$SecondaireModel->getEdtByDay($classe["id_classe"],"Lundi");
        array_push($edt,$lundi);
        $mardi=$SecondaireModel->getEdtByDay($classe["id_classe"],"Mardi");
        array_push($edt,$mardi);
        $mercredi=$SecondaireModel->getEdtByDay($classe["id_classe"],"Mercredi");
        array_push($edt,$mercredi);
        $jeudi=$SecondaireModel->getEdtByDay($classe["id_classe"],"Jeudi");
        array_push($edt,$jeudi);
        array_push($allEdt,$edt);
      
    }

    $EdtView=new EdtView();
    $EdtView->entete();
    $EdtView->menu();
    $EdtView->afficher($allEdt,$classes);
    $EdtView->piedsdepage();
}

}
?>