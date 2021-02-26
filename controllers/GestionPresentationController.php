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

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
            header("Location: /ProjetWeb/Admin");
    }else {
         
         $paragraphes=$this->GestionPresentationModel->getAllParagraphes();

         $GestionPresentationView=new GestionPresentationView();
         $GestionPresentationView->entete();
         $GestionPresentationView->navbar();
         $GestionPresentationView->afficherPresentation($paragraphes);
    }
}
public function ajouterPresentation(){

         $AjouterPresentationView=new AjouterPresentationView();
         $AjouterPresentationView->entete();
         $AjouterPresentationView->navbar();
         $AjouterPresentationView->afficherForm();

    }
    public function ajouterToBDD(){

        $reslt = $this->GestionPresentationModel->addParagraphe();  

        header("Location: /ProjetWeb/GestionPresentation");

    }
    public function supprimerPresentation($id){

        $supp = $this->GestionPresentationModel->supprimerPresentation($id);  
        header("Location: /ProjetWeb/GestionPresentation");
       
    }

    public function modifierPresentation($id){

         $paragraphe = $this->GestionPresentationModel->getParagraphe($id);
     
         $ModifierPresentationView=new ModifierPresentationView();
         $ModifierPresentationView->entete();
         $ModifierPresentationView->navbar();
         $ModifierPresentationView->afficherForm($paragraphe);

    }

    public function modifierInBDD(){

        $reslt = $this->GestionPresentationModel->modifierInBDD(); 
       
        header("Location: /ProjetWeb/GestionPresentation");

    }

}
?>