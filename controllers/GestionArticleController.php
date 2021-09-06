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
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
        $this->GestionArticleModel = new GestionArticleModel();
         $articles=$this->GestionArticleModel->getAllArticles();
       
         $GestionArticleView=new GestionArticleView();
         $GestionArticleView->entete();
         $GestionArticleView->navbar();
         $GestionArticleView->gestionArticle($articles);
    }else {
         header("Location: /ProjetWeb/AdminLogin"); 
    }
}
public function ajouterArticle(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin'))
    {
         $AjouterArticleView=new AjouterArticleView();
         $AjouterArticleView->entete();
         $AjouterArticleView->navbar();
         $AjouterArticleView->afficherForm();
    }else {
        header("Location: /ProjetWeb/AdminLogins"); 
    }

    }
    public function ajouterToBDD(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $reslt = $this->GestionArticleModel->addArticle();  

            header("Location: /ProjetWeb/GestionArticle");}
        else {
             header("Location: /ProjetWeb/AdminLogin"); 
        }

    }
    public function supprimerArticle($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $supp = $this->GestionArticleModel->supprimerArticle($id);  
            header("Location: /ProjetWeb/GestionArticle"); }
        else {
            header("Location: /ProjetWeb/AdminLogin"); 
       }
       
    }

    public function modifierArticle($id){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
            $article = $this->GestionArticleModel->getArticle($id);

            $ModifierArticleView=new ModifierArticleView();
            $ModifierArticleView->entete();
            $ModifierArticleView->navbar();
            $ModifierArticleView->afficherForm($article);}
            else{
                header("Location: /ProjetWeb/AdminLogin"); 
            }

    }

    public function modifierInBDD(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if ((array_key_exists("type", $_SESSION)) && (($_SESSION['type'])=='Admin')){
        $reslt = $this->GestionArticleModel->modifierInBDD(); 

        header("Location: /ProjetWeb/GestionArticle"); }
        else {
            header("Location: /ProjetWeb/AdminLogin"); 
        }

    }

}
?>