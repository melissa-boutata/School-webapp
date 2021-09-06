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

    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){

        $this->GestionUtilisateursModel = new GestionUtilisateursModel();
         $utilisateurs=$this->GestionUtilisateursModel->getAllUtilisateurs();

         $GestionUtilisateursView=new GestionUtilisateursView();
         $GestionUtilisateursView->entete();
         $GestionUtilisateursView->navbar();
         $GestionUtilisateursView->gestionUtilisateurs($utilisateurs);
    }else {
        header("Location: /ProjetWeb/AdminLogin");
         
    }
}
    public function supprimerUtilisateur($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $supp = $this->GestionUtilisateursModel->supprimerUtilisateur($id);  
            header("Location: /ProjetWeb/GestionUtilisateurs");
        }
        else{
            header("Location: /ProjetWeb/AdminLogin");

        }
       
    }

    public function ajouterUtilisateur($type){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $listeClasses=$this->GestionUtilisateursModel->listeClasses();
            $listeParents=$this->GestionUtilisateursModel->listeParents();

            $AjouterUtilisateurView=new AjouterUtilisateurView();
            $AjouterUtilisateurView->entete();
            $AjouterUtilisateurView->navbar();
            $AjouterUtilisateurView->afficherForm($type,$listeClasses,$listeParents);} 
        else {
            header("Location: /ProjetWeb/AdminLogin");

        }

    }

    public function ajouterToBDD(){

        $reslt = $this->GestionUtilisateursModel->addUtilisateur();  

        header("Location: /ProjetWeb/GestionUtilisateurs");

    }
   

    public function modifierUtilisateur($id,$type){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
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
         else {
            header("Location: /ProjetWeb/AdminLogin");

        }

    }

    public function modifierInBDD(){

        $reslt = $this->GestionUtilisateursModel->modifierInBDD(); 

        header("Location: /ProjetWeb/GestionUtilisateurs");

    }

}
?>