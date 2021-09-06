<?php
include_once "views/AccueilView.php";
include_once "models/AccueilModel.php";
include_once "views/PaginationView.php";

class AccueilController{
public $AccueilView;
public $AccueilModel;

public function __construct()
 {}

public function afficherAccueil(){

    $AccueilModel= new AccueilModel();
    $articles=$AccueilModel->getArticles();
    $images=$AccueilModel->getImages();

    $AccueilView=new AccueilView();
    $AccueilView->entete();
    $AccueilView->navbar();
    $AccueilView->diaporama($images);
    $AccueilView->menu();
    $AccueilView->contenu($articles);
    $AccueilView->piedsdepage();
}

public function paginationArticles(){
    $AccueilModel= new AccueilModel();
    $articles=$AccueilModel->getArticles();
    $articles=array_slice($articles,8); //Enlever les 8 articles qui ont été déjà affiché 

    $PaginationView=new PaginationView();
    $PaginationView->entete();
    $PaginationView->menu();
    $PaginationView->contenu($articles);
    $PaginationView->piedsdepage();
}

}
?>