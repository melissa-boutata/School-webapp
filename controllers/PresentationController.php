<?php
include_once "views/PresentationView.php";
include_once "models/PresentationModel.php";
class PresentationController{
public $PresentationView;
public $PresentationModel;

public function __construct()
 {}

public function afficherDescription(){

   $PresentationModel= new PresentationModel();
    $data=$PresentationModel->getDescriptions();
    
    $PresentationView=new PresentationView();
    $PresentationView->entete();
    $PresentationView->description($data);
}
}
?>