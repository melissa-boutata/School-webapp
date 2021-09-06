<?php 
include_once "views/GestionRestaurationView.php";
include_once "views/AjouterRepasView.php";
include_once "views/ModifierRepasView.php";
include_once "models/GestionRestaurationModel.php";
class GestionRestaurationController{
   public $GestionRestaurationView;
   public $AjouterRestaurationView;
   public $GestionRestaurationModel;
   public function __construct()
   {
       $this->GestionRestaurationModel = new GestionRestaurationModel();
   }
public function gererRestauration(){

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
        $menu=$this->GestionRestaurationModel->getAllRepas();

        $GestionRestaurationView=new GestionRestaurationView();
        $GestionRestaurationView->entete();
        $GestionRestaurationView->navbar();
        $GestionRestaurationView->afficherMenu($menu);
    }else {
        header("Location: /ProjetWeb/LoginAdmin");
    }
}
public function ajouterRepas(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $AjouterRepasView=new AjouterRepasView();
            $AjouterRepasView->entete();
            $AjouterRepasView->navbar();
            $AjouterRepasView->afficherForm(); 
    } else {
        header("Location: /ProjetWeb/LoginAdmin");
    }

    }
    public function ajouterToBDD(){

        $reslt = $this->GestionRestaurationModel->addRepas();  
        header("Location: /ProjetWeb/GestionRestauration");

    }
    public function supprimerRepas($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $supp = $this->GestionRestaurationModel->supprimerRepas($id); 
    
            header("Location: /ProjetWeb/GestionRestauration");} 
        else {
             header("Location: /ProjetWeb/LoginAdmin");
        }
       
    }

    public function modifierRepas($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
                $menu = $this->GestionRestaurationModel->getRepas($id);
            
                $ModifierRestaurationView=new ModifierRepasView();
                $ModifierRestaurationView->entete();
                $ModifierRestaurationView->navbar();
                $ModifierRestaurationView->afficherForm($menu); }
        else {
            header("Location: /ProjetWeb/LoginAdmin");
        }
    }

    public function modifierInBDD(){

        $reslt = $this->GestionRestaurationModel->modifierInBDD(); 
        header("Location: /ProjetWeb/GestionRestauration");

    }

}
?>