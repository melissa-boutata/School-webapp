<?php 
include_once "views/GestionPresentationView.php";
include_once "views/GestionDiaporamaView.php";
include_once "views/ModifierDiaporamaView.php";
include_once "models/GestionDiaporamaModel.php";

class GestionDiaporamaController{
   public $GestionDiaporamaView;
   public $AjouterDiaporamaView;
   public $GestionDiaporamaModel;
   public function __construct()
   {
       $this->GestionDiaporamaModel = new GestionDiaporamaModel();
   }
public function gererDiaporama(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {       
            $images=$this->GestionDiaporamaModel->getImages();
            $GestionDiaporamaView=new GestionDiaporamaView();
            $GestionDiaporamaView->entete();
            $GestionDiaporamaView->navbar();
            $GestionDiaporamaView->gestionDiaporama($images);
           
    }else {
        header("Location: /ProjetWeb/AdminLogin");
    }
}
    public function modifierDiaporama(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

            $images = $this->GestionDiaporamaModel->getImages();
        
            $ModifierDiaporamaView=new ModifierDiaporamaView();
            $ModifierDiaporamaView->entete();
            $ModifierDiaporamaView->navbar();
            $ModifierDiaporamaView->afficherForm($images); }
         else {
            header("Location: /ProjetWeb/AdminLogin");
         }

    }

    public function modifierInBDD(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

            $reslt = $this->GestionDiaporamaModel->modifierInBDD(); 
        
            header("Location: /ProjetWeb/GestionDiaporama");
        }
        else {
            header("Location: /ProjetWeb/AdminLogin");

        }

    }
}
?>