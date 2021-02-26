<?php
include_once "views/PrimaireView.php";
include_once "models/PrimaireModel.php";
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
}
?>