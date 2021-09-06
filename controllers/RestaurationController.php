<?php
include_once "views/RestaurationView.php";
include_once "models/RestaurationModel.php";
class RestaurationController{
public $RestaurationView;
public $RestaurationModel;

public function __construct()
 {}

public function afficherMenu($cycle){

    $RestaurationModel= new RestaurationModel();
    $listeRepas=$RestaurationModel->getMenu($cycle);
    
    $RestaurationView=new RestaurationView();
    $RestaurationView->entete();
    $RestaurationView->menu();
    $RestaurationView->afficher($listeRepas,$cycle);
    $RestaurationView->piedsdepage();
}
}
?>