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
    header("Location:/ProjetWeb/Admin");
}

public function afficherPanel(){

   session_start();
   $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
           
            header("Location: /ProjetWeb/Admin");
    }
    else {
    $AdminPanelView=new AdminPanelView();
    $AdminPanelView->entete();
    $AdminPanelView->navbar();
    $AdminPanelView->cadres();
    $AdminPanelView->piedsdepage();
    }
}
}
?>