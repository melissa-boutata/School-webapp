<?php 
include_once "views/AjouterEdtView.php";
include_once "models/AjouterEdtModel.php";
include_once "views/CreerClasseView.php";

class AjouterEdtController{

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
    if(session_status() == PHP_SESSION_NONE){
        session_start();
        }

    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
        $listeEns= $this->AjouterEdtModel->listeEns(); 
        $listeClasse=$this->AjouterEdtModel->listeClasse();
        $listeMatiere=$this->AjouterEdtModel->listeMatiere();

         $AjouterEdtView=new AjouterEdtView();
         $AjouterEdtView->entete();
         $AjouterEdtView->navbar();
         $AjouterEdtView->afficherForm($listeEns,$listeClasse,$listeMatiere);} 
         else {
            header("Location: /ProjetWeb/AdminLogin");
         }
    }
    public function ajouterEdtInBDD(){

        $reslt = $this->AjouterEdtModel->addEdt();  
        
        header("Location: /ProjetWeb/AjouterEdt");

    }
    public function creerClasse(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
            }
    
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            
             $CreerClasseView= new CreerClasseView();
             $CreerClasseView->entete();
             $CreerClasseView->navbar();
             $CreerClasseView->afficherForm();} 
             else {
                header("Location: /ProjetWeb/AdminLogin");
             }
    }
    public function creerClasseInBDD(){
        $reslt = $this->AjouterEdtModel->addClasse();  
        
        header("Location: /ProjetWeb/AjouterEdt");
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