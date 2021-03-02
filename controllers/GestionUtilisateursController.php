<?php 
include_once "views/GestionUtilisateursView.php";
include_once "views/AjouterUtilisateurView.php";
include_once "views/ModifierUtilisateurView.php";
include_once "models/GestionUtilisateursModel.php";
class GestionUtilisateursController{
   public $GestionUtilisateursView;
   public $AjouterUtilisateursView;
   public $GestionUtilisateursModel;
   public function __construct()
   {
       $this->GestionUtilisateursModel = new GestionUtilisateursModel();
   }
public function gererUtilisateurs(){

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
            header("Location: /ProjetWeb/Admin");
    }else {
         $this->GestionUtilisateursModel = new GestionUtilisateursModel();
         $utilisateurs=$this->GestionUtilisateursModel->getAllUtilisateurs();

         $GestionUtilisateursView=new GestionUtilisateursView();
         $GestionUtilisateursView->entete();
         $GestionUtilisateursView->navbar();
         $GestionUtilisateursView->gestionUtilisateurs($utilisateurs);
    }
}
    public function supprimerUtilisateur($id){

        $supp = $this->GestionUtilisateursModel->supprimerUtilisateur($id);  
        header("Location: /ProjetWeb/GestionUtilisateurs");
       
    }

    public function ajouterUtilisateur($type){

         $listeClasses=$this->GestionUtilisateursModel->listeClasses();
         $listeParents=$this->GestionUtilisateursModel->listeParents();

         $AjouterUtilisateurView=new AjouterUtilisateurView();
         $AjouterUtilisateurView->entete();
         $AjouterUtilisateurView->navbar();
         $AjouterUtilisateurView->afficherForm($type,$listeClasses,$listeParents);

    }

    public function ajouterToBDD(){

        $reslt = $this->GestionUtilisateursModel->addUtilisateur();  

        header("Location: /ProjetWeb/GestionUtilisateurs");

    }
   

    public function modifierUtilisateur($id,$type){
           $listeClasses=$this->GestionUtilisateursModel->listeClasses();
           $utilisateurs = $this->GestionUtilisateursModel->getAllUtilisateurs();

            foreach ($utilisateurs as $utilisateur){
                if($utilisateur["id"]==$id && $utilisateur["type"]==$type){
                    $edit_utilisateur=$utilisateur;
                }
            }

         $ModifierUtilisateurView=new ModifierUtilisateurView();
         $ModifierUtilisateurView->entete();
         $ModifierUtilisateurView->navbar();
         $ModifierUtilisateurView->afficherForm($edit_utilisateur,$listeClasses);

    }

    public function modifierInBDD(){

        $reslt = $this->GestionUtilisateursModel->modifierInBDD(); 

        header("Location: /ProjetWeb/GestionUtilisateurs");

    }

}
?>