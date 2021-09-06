<?php 
include_once "views/GestionPresentationView.php";
include_once "views/AjouterPresentationView.php";
include_once "views/ModifierPresentationView.php";
include_once "models/GestionPresentationModel.php";
class GestionPresentationController{
   public $GestionPresentationView;
   public $AjouterPresentationView;
   public $GestionPresentationModel;
   public function __construct()
   {
       $this->GestionPresentationModel = new GestionPresentationModel();
   }
public function gererPresentation(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {       
            $paragraphes=$this->GestionPresentationModel->getAllParagraphes();
            $GestionPresentationView=new GestionPresentationView();
            $GestionPresentationView->entete();
            $GestionPresentationView->navbar();
            $GestionPresentationView->afficherPresentation($paragraphes);
           
    }else {
        header("Location: /ProjetWeb/AdminLogin");
    }
}
public function ajouterPresentation(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {  
         $AjouterPresentationView=new AjouterPresentationView();
         $AjouterPresentationView->entete();
         $AjouterPresentationView->navbar();
         $AjouterPresentationView->afficherForm();
    }else {
            header("Location: /ProjetWeb/AdminLogin");
        }
    }
    public function ajouterToBDD(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

            $reslt = $this->GestionPresentationModel->addParagraphe();  

            header("Location: /ProjetWeb/GestionPresentation");
        }else{
            header("Location: /ProjetWeb/AdminLogin");
        }
    }
    public function supprimerPresentation($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
        $supp = $this->GestionPresentationModel->supprimerPresentation($id);  
        header("Location: /ProjetWeb/GestionPresentation");}
       else{
            header("Location: /ProjetWeb/AdminLogin");
        }
    }

    public function modifierPresentation($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

            $paragraphe = $this->GestionPresentationModel->getParagraphe($id);
        
            $ModifierPresentationView=new ModifierPresentationView();
            $ModifierPresentationView->entete();
            $ModifierPresentationView->navbar();
            $ModifierPresentationView->afficherForm($paragraphe); }
         else {
            header("Location: /ProjetWeb/AdminLogin");
         }

    }

    public function modifierInBDD(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

            $reslt = $this->GestionPresentationModel->modifierInBDD(); 
        
            header("Location: /ProjetWeb/GestionPresentation");}
        else {
            header("Location: /ProjetWeb/AdminLogin");

        }

    }

}
?>