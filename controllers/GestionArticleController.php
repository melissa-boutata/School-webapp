<?php 
include_once "views/GestionArticleView.php";
include_once "views/AjouterArticleView.php";
include_once "views/ModifierArticleView.php";
include_once "models/GestionArticleModel.php";
class GestionArticleController{
   public $GestionArticleView;
   public $AjouterArticleView;
   public $GestionArticleModel;
   public function __construct()
   {
       $this->GestionArticleModel = new GestionArticleModel();
   }
public function gererArticles(){

    session_start();
    $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if ($valid_session &&  $_SESSION["type"] != "admin")
    {
            header("Location: /ProjetWeb/Admin");
    }else {
         $this->GestionArticleModel = new GestionArticleModel();
         $articles=$this->GestionArticleModel->getAllArticles();
       
         $GestionArticleView=new GestionArticleView();
         $GestionArticleView->entete();
         $GestionArticleView->navbar();
         $GestionArticleView->gestionArticle($articles);
    }
}
public function ajouterArticle(){
         $AjouterArticleView=new AjouterArticleView();
         $AjouterArticleView->entete();
         $AjouterArticleView->navbar();
         $AjouterArticleView->afficherForm();

    }
    public function ajouterToBDD(){

        $reslt = $this->GestionArticleModel->addArticle();  

        header("Location: /ProjetWeb/GestionArticle");

    }
    public function supprimerArticle($id){

        $supp = $this->GestionArticleModel->supprimerArticle($id);  
        header("Location: /ProjetWeb/GestionArticle");
       
    }

    public function modifierArticle($id){

         $article = $this->GestionArticleModel->getArticle($id);

         $ModifierArticleView=new ModifierArticleView();
         $ModifierArticleView->entete();
         $ModifierArticleView->navbar();
         $ModifierArticleView->afficherForm($article);

    }

    public function modifierInBDD(){

        $reslt = $this->GestionArticleModel->modifierInBDD(); 

        header("Location: /ProjetWeb/GestionArticle");

    }

}
?>