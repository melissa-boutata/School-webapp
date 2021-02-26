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

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
            header("Location: /ProjetWeb/Admin");
    }else {
      
         $menu=$this->GestionRestaurationModel->getAllRepas();

         $GestionRestaurationView=new GestionRestaurationView();
         $GestionRestaurationView->entete();
         $GestionRestaurationView->navbar();
         $GestionRestaurationView->afficherMenu($menu);
    }
}
public function ajouterRepas(){

         $AjouterRepasView=new AjouterRepasView();
         $AjouterRepasView->entete();
         $AjouterRepasView->navbar();
         $AjouterRepasView->afficherForm();

    }
    public function ajouterToBDD(){

        $reslt = $this->GestionRestaurationModel->addRepas();  
        header("Location: /ProjetWeb/GestionRestauration");

    }
    public function supprimerRepas($id){

        $supp = $this->GestionRestaurationModel->supprimerRepas($id); 
  
        header("Location: /ProjetWeb/GestionRestauration");
       
    }

    public function modifierRepas($id){

         $menu = $this->GestionRestaurationModel->getRepas($id);
     
         $ModifierRestaurationView=new ModifierRepasView();
         $ModifierRestaurationView->entete();
         $ModifierRestaurationView->navbar();
         $ModifierRestaurationView->afficherForm($menu);
    }

    public function modifierInBDD(){

        $reslt = $this->GestionRestaurationModel->modifierInBDD(); 
        header("Location: /ProjetWeb/GestionRestauration");

    }

}
?>