<?php
include_once "views/MoyenView.php";
include_once "models/MoyenModel.php";
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
}
?>