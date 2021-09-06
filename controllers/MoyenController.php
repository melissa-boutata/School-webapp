<?php
include_once "views/MoyenView.php";
include_once "models/MoyenModel.php";
include_once "views/EnsMoyenView.php";
include_once "views/EdtView.php";
class MoyenController{
public $MoyenView;
public $MoyenModel;

public function __construct()
 {}

public function afficher(){

    $MoyenModel= new MoyenModel();
    $articles=$MoyenModel->getMoyenArticles();
    
    $MoyenView=new MoyenView();
    $MoyenView->entete();
    $MoyenView->menu();
    $MoyenView->afficher($articles);
    $MoyenView->piedsdepage();
}
public function ensMoyen(){
    $MoyenModel= new MoyenModel();
    $ens = $MoyenModel->getEnsMoyen();

     $EnsMoyenView=new EnsMoyenView();
     $EnsMoyenView->entete();
     $EnsMoyenView->menu();
     $EnsMoyenView->afficherEns($ens);
     $EnsMoyenView->piedsdepage();
  
}

public function edtMoyen(){  
    $MoyenModel= new MoyenModel();
    $classes=$MoyenModel->getClasses("Moyen");
    $allEdt= array(); 
    foreach($classes as $classe) {
    
        $edt= array(); 
        $dimanche=$MoyenModel->getEdtByDay($classe["id_classe"],"Dimanche");
        array_push($edt,$dimanche);
        $lundi=$MoyenModel->getEdtByDay($classe["id_classe"],"Lundi");
        array_push($edt,$lundi);
        $mardi=$MoyenModel->getEdtByDay($classe["id_classe"],"Mardi");
        array_push($edt,$mardi);
        $mercredi=$MoyenModel->getEdtByDay($classe["id_classe"],"Mercredi");
        array_push($edt,$mercredi);
        $jeudi=$MoyenModel->getEdtByDay($classe["id_classe"],"Jeudi");
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