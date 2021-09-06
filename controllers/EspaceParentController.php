<?php
include_once "views/EspaceParentView.php";
include_once "models/EspaceParentModel.php";

class EspaceParentController{
public $EspaceView;
Public $EspaceModel;
public function __construct()
 {
               
}

        
public function afficherEspace(){

    $EspaceModel=new EspaceParentModel();
    $cadres=$EspaceModel->getCadres();
   
    $EspaceView=new EspaceParentView();
    $EspaceView->entete();
    $EspaceView->navbar();
    $EspaceView->afficher($cadres);
}
}
?>
