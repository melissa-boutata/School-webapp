<?php
include_once "views/PrimaireView.php";
include_once "models/PrimaireModel.php";
include_once  "views/EnsPrimaireView.php";
include_once "views/EdtView.php";
class PrimaireController{
public $PrimaireView;
public $PrimaireModel;

public function __construct()
 {}

public function afficher(){

    $PrimaireModel= new PrimaireModel();
    $articles=$PrimaireModel->getPrimaireArticles();
    
    $PrimaireView=new PrimaireView();
    $PrimaireView->entete();
    $PrimaireView->menu();
    $PrimaireView->afficher($articles);
    $PrimaireView->piedsdepage();
}
public function ensPrimaire(){
    $PrimaireModel= new PrimaireModel();
    $ens = $PrimaireModel->getEnsPrimaire();

     $EnsPrimaireView=new EnsPrimaireView();
     $EnsPrimaireView->entete();
     $EnsPrimaireView->menu();
     $EnsPrimaireView->afficherEns($ens);
     $EnsPrimaireView->piedsdepage();
  
}

public function edtPrimaire(){  
    $PrimaireModel= new PrimaireModel();
    $classes=$PrimaireModel->getClasses("Primaire");
    $allEdt= array(); 
    foreach($classes as $classe) {
    
        $edt= array(); 
        $dimanche=$PrimaireModel->getEdtByDay($classe["id_classe"],"Dimanche");
        array_push($edt,$dimanche);
        $lundi=$PrimaireModel->getEdtByDay($classe["id_classe"],"Lundi");
        array_push($edt,$lundi);
        $mardi=$PrimaireModel->getEdtByDay($classe["id_classe"],"Mardi");
        array_push($edt,$mardi);
        $mercredi=$PrimaireModel->getEdtByDay($classe["id_classe"],"Mercredi");
        array_push($edt,$mercredi);
        $jeudi=$PrimaireModel->getEdtByDay($classe["id_classe"],"Jeudi");
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