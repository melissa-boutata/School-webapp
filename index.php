<?php
/*
RewriteEngine On

# ignore les fichiers, dossier existant
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# chaque requete get sera exécutée avec l'action action=var
RewriteRule ^(.*)$ index.php?action=$1 [L,QSA]

include_once "controllers/LoginController.php";
include_once "controllers/EspaceEtudController.php";
include_once "controllers/PresentationController.php";
include_once "controllers/AccueilController.php";


            $action = $_GET['action'];

            /* Decoupe l'url en liste 
            $action_list = explode('/', $action);

            if(isset($action) && isset($action_list[0])) {
            /* On trouve le nom du controleur 
            $controller_name = $action_list[0];
            

            if($controller_name == "Accueil") 
                {
                    $controller = new AccueilController();
                    $controller->afficherAccueil();
                }
            elseif($controller_name == "LoginController") 
                {
                    $controller = new LoginController();
                    $controller->invoke();
                }
            elseif($controller_name == "EspaceEtudController") 
            {
                $controller = new EspaceEtudController();
                $controller->afficherEspace();
            }
            elseif($controller_name == "AccueilController") 
            {
                include "views/AccueilView.php";
            }
            elseif($controller_name == "PresentationController") 
            {
                $controller = new PresentationController();
                $controller->afficherDescription();
            }
            else
                {
                    header('Status: 404 Not Found');
                    echo '<html><body><h1>Page Not Found</h1></body></html>';
                }
  }
            



        $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';   
        var_dump($url);
?>

*/

    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

        include_once "controllers/LoginController.php";
        include_once "controllers/EspaceEtudController.php";
        include_once "controllers/PresentationController.php";
        include_once "controllers/AccueilController.php";
        include_once "controllers/PublicArticlesController.php";
        include_once "controllers/PrimaireController.php";
        include_once "controllers/MoyenController.php";
        include_once "controllers/SecondaireController.php";
        include_once "controllers/RestaurationController.php";
        include_once "controllers/ListeEnsController.php";
        include_once "controllers/LoginAdminController.php";
        include_once "controllers/AdminPanelController.php";
        include_once "controllers/GestionArticleController.php";
        include_once "controllers/GestionPresentationController.php";
        include_once "controllers/GestionRestaurationController.php";
        include_once "controllers/GestionEnsController.php";
        include_once "controllers/AjouterEdtController.php";


    if ($url == '/')
    {

        // This is the home page
        // Initiate the home controller
        // and render the home view

            $controller = new AccueilController();
            $controller->afficherAccueil();

    }else{

        // This is not home page
        // Initiate the appropriate controller
        // and render the required view

        //The first element should be a controller
        $requestedController = $url[0]; 

        // If a second part is added in the URI, 
        // it should be a method
        $requestedAction = isset($url[1])? $url[1] :'';

        // The remain parts are considered as 
        // arguments of the method
        $requestedParams = array_slice($url, 2); 

        // Check if controller exists. NB: 
        // You have to do that for the model and the view too
        
        if ($requestedController=="Login")
        {
                    $controller = new LoginController();
                    $controller->invoke(); }
        elseif ($requestedController=="Admin")
        {
                    $controller = new LoginAdminController();
                    $controller->afficher(); }

       elseif ($requestedController=="AdminLogin")
                    {
                     $controller = new LoginAdminController();
                     $controller->login(); }
        elseif ($requestedController=="AdminLogout"){
                    $controller = new  AdminPanelController();
                    $controller->logout(); 
        }
       elseif ($requestedController=="AdminPanel")
                     {
                      $controller = new AdminPanelController();
                      $controller->afficherPanel();
                    }
        elseif ($requestedController=="GestionArticle")
                    {
                     $controller = new GestionArticleController();
                     $controller->gererArticles();
                   }
        elseif ($requestedController=="AjouterArticle")
                   {
                    $controller = new GestionArticleController();
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $controller->ajouterToBDD();}
                    else{
                    $controller->ajouterArticle();
                    }
                  }
        elseif ($requestedController=="ModifierArticle")
                  {
                   $controller = new GestionArticleController();
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $controller->modifierInBDD();
                    }else {
                    $controller->modifierArticle($requestedAction);
                 }
                }
        elseif ($requestedController=="SupprimerArticle")
                {
                 $controller = new GestionArticleController();
                 $controller->supprimerArticle($requestedAction);
               }
                elseif ($requestedController=="GestionPresentation")
                {
                 $controller = new GestionPresentationController();
                 $controller->gererPresentation();
               }
                elseif ($requestedController=="AjouterPresentation")
                        {
                            $controller = new GestionPresentationController();
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $controller->ajouterToBDD();}
                            else{
                            $controller->ajouterPresentation();
                            }
                        }
                elseif ($requestedController=="ModifierPresentation")
                        {
                        $controller = new GestionPresentationController();
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $controller->modifierInBDD();
                            }else {
                            $controller->modifierPresentation($requestedAction);
                        }
                        }
                elseif ($requestedController=="SupprimerPresentation")
                        {
                        $controller = new GestionPresentationController();
                        $controller->supprimerPresentation($requestedAction);
                        }
                 elseif ($requestedController=="GestionRestauration")
                {
                 $controller = new GestionRestaurationController();
                 $controller->gererRestauration();
               }
                elseif ($requestedController=="AjouterRepas")
                        {
                            $controller = new GestionRestaurationController();
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $controller->ajouterToBDD();}
                            else{
                            $controller->ajouterRepas();
                            }
                        }
                elseif ($requestedController=="ModifierRepas")
                        {
                        $controller = new GestionRestaurationController();
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $controller->modifierInBDD();
                            }else {
                            $controller->modifierRepas($requestedAction);
                        }
                        }
                elseif ($requestedController=="SupprimerRepas")
                        {
                        $controller = new GestionRestaurationController();
                        $controller->supprimerRepas($requestedAction);
                        }

               elseif ($requestedController=="GestionEns")
                        {
                         $controller = new GestionEnsController();
                         $controller->gererEns();
                       }
              elseif ($requestedController=="AjouterHeure")
                       {
                        $controller = new GestionEnsController();
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $controller->modifierHeureInBDD();} 
                        else {
                            $controller->ajouterHeure($requestedAction);
                        }
                      }
            elseif ($requestedController=="AjouterClasse")
                      {
                       $controller = new GestionEnsController();
                       if($_SERVER["REQUEST_METHOD"] == "POST"){
                       $controller->ajouterClasseInBDD();} 
                       else {
                           $controller->ajouterClasse($requestedAction);
                       }
                     }
            elseif ($requestedController=="AjouterEdt")
                     {
                      $controller = new AjouterEdtController();
                      if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $controller->ajouterEdtInBDD();
                    } 
                      else {
                          $controller->ajouterEdt();
                      }
                    }
       
        elseif($requestedController == "EspaceEtudiant")  //Not working
                {
                    $controller = new EspaceEtudController();
                    $controller->afficherEspace();
                }
        
        elseif($requestedController== "Presentation") 
                {
                    $controller = new PresentationController();
                    $controller->afficherDescription();
                }

        elseif($requestedController == "PublicArticles") 
                {
                    // $requestedAction is the method
                    // $requestedParams is the param
                    $controller = new PublicArticlesController();
                    $controller->afficherArticle($requestedParams[0]);
                  
                }
        elseif($requestedController== "Primaire") 
                {
                    $controller = new PrimaireController();
                    $controller->afficher();
                }
        elseif($requestedController== "Moyen") 
                {
                    $controller = new MoyenController();
                    $controller->afficher();
                }
        elseif($requestedController== "Secondaire") 
                {
                    $controller = new SecondaireController();
                    $controller->afficher();
                }
         elseif($requestedController== "Restauration") 
                {
                    $controller = new RestaurationController();
                    $controller->afficherMenu($requestedParams[0]);
                }
        elseif($requestedController== "ListeEns") 
                {
                    $controller = new ListeEnsController();
                    $controller->afficherListeEns($requestedParams[0]);
                }
        else{

        echo $requestedController;
            header('Status: 404 Not Found');
            echo '<html><body><h1>Erreur 404 : Page Not Found</h1></body></html>';
            //require the 404 controller and initiate it
            //Display its view
        }
    }