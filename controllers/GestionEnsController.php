<?php 
include_once "views/GestionEnsView.php";
include_once "views/AjouterClasseView.php";
include_once "views/AjouterHeureView.php";
include_once "models/GestionEnsModel.php";

class GestionEnsController{
   public $GestionEnsView;
   public $AjouterClasseView;
   public $GestionEnsModel;
   public function __construct()
   {
       $this->GestionEnsModel = new GestionEnsModel();
   }
public function gererEns(){

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
        $this->GestionEnsModel = new GestionEnsModel();
        $ens=$this->GestionEnsModel->getAllEns();
      /*  
        $listeClasses=array();
        foreach ($data as $ens) {
        $ens=array_slice($array, 2)
        }
        */
        $GestionEnsView=new GestionEnsView();
        $GestionEnsView->entete();
        $GestionEnsView->navbar();
        $GestionEnsView->gestionEns($ens);
    }else {
    
         header("Location: /ProjetWeb/Admin");

    }
}
  
 public function modifierHeureInBDD(){
    
        $reslt = $this->GestionEnsModel->modifierInBDD(); 
      
        header("Location: /ProjetWeb/GestionEns");


    }

    public function ajouterHeure($id){
if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
        $ens = $this->GestionEnsModel->getEns($id);

        $ModifierEnsView=new AjouterHeureView();
        $ModifierEnsView->entete();
        $ModifierEnsView->navbar();
        $ModifierEnsView->afficherForm($ens);}
        else {
    
            header("Location: /ProjetWeb/Admin");
   
       }
    }

    public function ajouterClasseInBDD(){

        $reslt = $this->GestionEnsModel->ajouterClasseInBDD(); 
      
        header("Location: /ProjetWeb/GestionEns");

    }

    public function ajouterClasse($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
        {
        $ens = $this->GestionEnsModel->getEns($id);

        $AjouterClasseView=new AjouterClasseView();
        $AjouterClasseView->entete();
        $AjouterClasseView->navbar();
        $AjouterClasseView->afficherForm($ens);
        }
        else {
    
            header("Location: /ProjetWeb/Admin");
   
       }
    }
}
?>