<?php
include_once "views/AdminPanelView.php";
include_once "models/AdminPanelModel.php";
class AdminPanelController{
public $AdminPanelView;
public $AdminPanelModel;

public function __construct()
 {

 }
public function logout(){

    session_start();
    session_destroy();
    header("Location:/ProjetWeb/AdminLogin");
}

public function afficherPanel(){

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
        $AdminPanelView=new AdminPanelView();
        $AdminPanelView->entete();
        $AdminPanelView->navbar();
        $AdminPanelView->cadres();
        $AdminPanelView->piedsdepage();
    }
    else {
        header("Location: /ProjetWeb/AdminLogin");
    }
}
}
?>