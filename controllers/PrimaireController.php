<?php
include_once "views/PrimaireView.php";
include_once "models/PrimaireModel.php";
include_once  "views/EnsPrimaireView.php";
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
     $EnsPrimaireView->afficherEns($ens);
  
}



}
?>