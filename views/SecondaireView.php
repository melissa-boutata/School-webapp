<?php

class SecodaireView{
  
  public function entete(){
    ?>
    <!doctype html>
    <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet">
        <style> 
    </style>
        </head>
  
        <?php
        }
  public function menu(){
    ?>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Accueil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Présentation</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Cycle Primaire
          <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cycle Moyen</a>
        </li>
        <li class="nav-item  active">
          <a class="nav-link" href="#">Cycle Secondaire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">Espace élèves</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">Espace parents</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li> 
      </ul>
      <br>
    </div>
    </div>
    </nav>
<?php 
  }

  public function afficher($articles){
?>
    <!-- Page Content -->
    <br>
    <br>
    <br>
    <div class="container">
      <br> 
       <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="https://binaries.templates.cdn.office.net/support/templates/fr-fr/lt04350360_quantized.png " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Tous les emplois du temps</h4>
              <p class="card-text">Accédez aux emlpois du temps du des différentes classes du cycle primaire </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/"  class="btn btn-primary">Voir plus</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="data:image/png;base64,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" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"> Liste des enseignants</h4>
              <p class="card-text">Accédez à la liste des enseignants du cycle primaire et leurs heures de réception</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/ListeEns/Display/Secondaire"  class="btn btn-primary">Voir plus</a>
                </div>
                <small class="text-muted"> </small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0_a72qZkQ0ratUZxaqU6oB9XwsvKlKkYxZg&usqp=CAU " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Informations pratiques</h4>
              <p class="card-text">Cliquez ici pour voir toutes les informations qui concernent le cycle primaire</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/"  class="btn btn-primary">Voir plus</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="https://www.brest.fr/fileadmin/imported_for_brest/fileadmin/Images/Au_quotidien/Vivre_ensemble_a_tous_ages/enfance/cantine_damien_goret.jpg " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Informations sur la Restauration</h4>
              <p class="card-text">Cliquez ici pour visualier chaque jour au menu du cycle primaire</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/Restauration/Display/Secondaire"  class="btn btn-primary">Voir plus</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.row -->


        <br> 
              <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[0]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[0]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[0]["description"],0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[0]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[0]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[1]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[1]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[1]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[1]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[1]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[2]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[2]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[2]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[2]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[2]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[3]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[3]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[3]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[3]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[3]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.row -->
      
        </div>
        <!-- /.container -->
   
<?php 
  }

  public function piedsdepage(){
    ?>
      <!-- Footer -->
      <footer class="py-5 bg-dark  ">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; 2021</p>
        </div>
        <!-- /.container -->
      </footer>
    </body>
  </html>
    <?php
    }
}

?>






  



