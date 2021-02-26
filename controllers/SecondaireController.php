<?php
include_once "views/SecondaireView.php";
include_once "models/SecondaireModel.php";
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
}
?>