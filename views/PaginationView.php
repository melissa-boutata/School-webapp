<?php

class PaginationView{
  
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Presentation">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Primaire">Cycle Primaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Moyen">Cycle Moyen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceEtudiant">Espace élèves</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceParent">Espace parents</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Contact">Contact</a>
        </li> 
      </ul>
    </div>
    </div>
    </nav>
<?php 
  }

  public function contenu($articles){
?>

 <!-- Page Content -->
 <div class="container">
      <br> 
  
    <?php 
    $nb_articles=sizeof($articles);
    $nb_row=$nb_articles/4;

    $j=0;
    $nbr=4;
    for($i=0;$i<$nb_row;$i++){?>
      <div class="row text-center"> 

        <?php for($j;$j<$nbr;$j++){ ?>  <!-- vérifier if article exists-->
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[$j]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[$j]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[$j]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[$j]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[$j]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>
    <?php } 
    $nbr=$j+4;
    ?>
  </div>
<!-- /.row -->
<?php 
    } ?>

</div>
<!-- /.container -->
        
<?php 
  }
  public function piedsdepage(){
    ?>
      <!-- Footer -->
      <footer class="py-5 bg-dark ">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Presentation">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Primaire">Cycle Primaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Moyen">Cycle Moyen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceEtudiant">Espace élèves</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceParent">Espace parents</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Contact">Contact</a>
        </li> 
      </ul>
    </div>
    </div>
    </nav>
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






  



