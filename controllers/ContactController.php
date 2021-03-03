<?php
include_once "views/ContactView.php";
//include_once "models/ContactModel.php";

class ContactController{
public $ContactView;
Public $ContactModel;
public function __construct()
 {
               
}

        
public function afficherContact(){

    /*$ContactModel=new EspaceParentModel();
    $cadres=$EspaceModel->getCadres();*/
   
    $ContactView=new ContactView();
    $ContactView->afficher();
    $ContactView->entete();
    /*$ContactView->navbar();
    $ContactView->afficher($cadres);*/
}
}
?>
