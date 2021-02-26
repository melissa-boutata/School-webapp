<?php
include_once "views/AccueilView.php";
include_once "models/AccueilModel.php";
class AccueilController{
public $AccueilView;
public $AccueilModel;

public function __construct()
 {}

public function afficherAccueil(){

    $AccueilModel= new AccueilModel();
    $articles=$AccueilModel->getArticles();

    $AccueilView=new AccueilView();
    $AccueilView->entete();
    $AccueilView->navbar();
    $AccueilView->diaporama();
    $AccueilView->menu();
    $AccueilView->contenu($articles);
    $AccueilView->piedsdepage();
}
}
?>