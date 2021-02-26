<?php 
include_once "views/AjouterEdtView.php";
include_once "models/AjouterEdtModel.php";
class AjouterEdtController{
   /*public $GestionRestaurationView;
   public $AjouterRestaurationView;
   public $GestionRestaurationModel;*/

   public function __construct()
   {
       $this->AjouterEdtModel = new AjouterEdtModel();
   }/*
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
}*/ 
public function ajouterEdt(){

        $listeEns= $this->AjouterEdtModel->listeEns(); 
        $listeClasse=$this->AjouterEdtModel->listeClasse();

         $AjouterEdtView=new AjouterEdtView();
         $AjouterEdtView->entete();
         $AjouterEdtView->navbar();
         $AjouterEdtView->afficherForm($listeEns,$listeClasse);
    }
    public function ajouterEdtInBDD(){

        $reslt = $this->AjouterEdtModel->addEdt();  
        
        header("Location: /ProjetWeb/AjouterEdtModel");

    }
    /*
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
*/
}
?>