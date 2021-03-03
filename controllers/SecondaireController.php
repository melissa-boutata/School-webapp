<?php
include_once "views/SecondaireView.php";
include_once "models/SecondaireModel.php";
include_once "views/EnsSecondaireView.php";

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
    $ens = $SecondaireModel->getEnsScondaire();

     $EnsSecondaireView=new EnsSecondaireView();
     $EnsSecondaireView->entete();
     $EnsSecondaireView->afficherEns($ens);
  
}


}
?>