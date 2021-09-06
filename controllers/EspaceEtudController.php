<?php
include_once "views/EspaceEtudView.php";
include_once "models/EspaceEtudModel.php";

class EspaceEtudController{
public $EspaceView;
Public $EspaceModel;
public function __construct()
 {
               
}
        
public function afficherEspace(){

    $EspaceModel=new EspaceEtudModel();
    $cadres=$EspaceModel->getCadres();
   
    $EspaceView=new EspaceEtudView();
    $EspaceView->entete();
    $EspaceView->navbar();
    $EspaceView->afficher($cadres);
}
}
?>
