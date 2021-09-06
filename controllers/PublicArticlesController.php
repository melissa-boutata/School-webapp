<?php
include_once "views/PublicArticlesView.php";
include_once "models/PublicArticlesModel.php";
class PublicArticlesController{
public $PresentationView;
public $PresentationModel;

public function __construct()
 {}

public function afficherArticle($id){

    $PublicArticlesModel= new PublicArticlesModel();
    $article=$PublicArticlesModel->getArticle($id);
    
    $PublicArticlesView=new PublicArticlesView();
    $PublicArticlesView->entete();
    $PublicArticlesView->menu();
    $PublicArticlesView->afficher($article);
    $PublicArticlesView->piedsdepage();
}
}
?>