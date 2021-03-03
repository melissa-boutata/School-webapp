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

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
            header("Location: /ProjetWeb/Admin");
    }else {
         $this->GestionEnsModel = new GestionEnsModel();
         $ens=$this->GestionEnsModel->getAllEns();
         echo $ens[0]["nom"];
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
    }
}
  
 public function modifierHeureInBDD(){

        $reslt = $this->GestionEnsModel->modifierInBDD(); 
      
        header("Location: /ProjetWeb/GestionEns");

    }

    public function ajouterHeure($id){

        $ens = $this->GestionEnsModel->getEns($id);

        $ModifierEnsView=new AjouterHeureView();
        $ModifierEnsView->entete();
        $ModifierEnsView->navbar();
        $ModifierEnsView->afficherForm($ens);
    }

    public function ajouterClasseInBDD(){

        $reslt = $this->GestionEnsModel->ajouterClasseInBDD(); 
      
        header("Location: /ProjetWeb/GestionEns");

    }

    public function ajouterClasse($id){

        $ens = $this->GestionEnsModel->getEns($id);

        $AjouterClasseView=new AjouterClasseView();
        $AjouterClasseView->entete();
        $AjouterClasseView->navbar();
        $AjouterClasseView->afficherForm($ens);
    }
}
?>