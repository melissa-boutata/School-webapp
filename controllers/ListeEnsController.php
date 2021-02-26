<?php
include_once "views/ListeEnsView.php";
include_once "models/ListeEnsModel.php";
class ListeEnsController{
public $listeEnsView;
public $listeEnsModel;

public function __construct()
 {}

public function afficherListeEns($cycle){

    $listeEnsModel= new ListeEnsModel();
    $listeEns=$listeEnsModel->getListeEns($cycle);
    
    $listeEnsView=new ListeEnsView();
    $listeEnsView->entete();
    $listeEnsView->menu();
    $listeEnsView->afficher($listeEns,$cycle);
    $listeEnsView->piedsdepage();
}
}
?>