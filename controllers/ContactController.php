<?php
include_once "views/ContactView.php";
include_once "views/GestionContactView.php";
include_once "views/ModifierContactView.php";
include_once "models/ContactModel.php";

class ContactController{
public $ContactView;
Public $ContactModel;
public function __construct()
 {
               
}

public function afficherContact(){

    $ContactModel=new ContactModel();
    $contact=$ContactModel->getContact();
   
    $ContactView=new ContactView();
    $ContactView->entete();
    $ContactView->menu();
    $ContactView->afficher($contact);
}
public function gererContact(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
}
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
 
        $ContactModel=new ContactModel();
        $contact=$ContactModel->getContact();
    
        $GestionContactView=new GestionContactView();
        $GestionContactView->entete();
        $GestionContactView->gererContact($contact); } 
    else {
        header("Location: /ProjetWeb/AdminLogin");

    }
}
public function modifierContact(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
        $ContactModel=new ContactModel();
        $contact=$ContactModel->getContact();

        $ModifierContactView=new ModifierContactView();
        $ModifierContactView->entete();
        $ModifierContactView->navbar();
        $ModifierContactView->afficherForm($contact);} 
    else {
        header("Location: /ProjetWeb/AdminLogin");
    }

}

public function modifierInBDD(){
   $ContactModel=new ContactModel();
   $reslt = $ContactModel->modifierInBDD(); 
  
   header("Location: /ProjetWeb/GestionContact");

}
}
?>
