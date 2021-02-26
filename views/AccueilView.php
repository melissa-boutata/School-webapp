<?php

class AccueilView{
  
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

    public function navbar(){
          ?>
  <!-- Navigation -->
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Logo here</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Facebook
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Twitter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LinkedIn</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php 
    }
  public function diaporama() {
    ?>
    <div class="slider">
      <div class="slides">

        <div class="slide"><img src="public/assets/picture0.jpg"></div>
        <div class="slide"><img src="public/assets/picture1.png"></div>
        <div class="slide"><img src="public/assets/picture2.png"></div>
        <div class="slide"><img src="public/assets/picture3.png"></div>		

      </div>
    </div>
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
          <a class="nav-link" href="#">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cycle Primaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cycle Moyen</a>
        </li>
        <li class="nav-item">
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
       <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[0]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[0]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[0]["description"], 0, 120) . '...' ?></p>
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
              <p class="card-text"><?php echo substr($articles[1]["description"], 0, 120) . '...' ?></p>
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


        <br> 
              <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[4]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[4]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[4]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[4]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[4]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[5]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[5]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[5]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[5]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[5]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[6]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[6]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[6]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[6]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[6]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src=" <?php echo $articles[7]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[7]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[7]["description"], 0, 130) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/display/<?php echo $articles[7]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[7]["date"] ?></small>
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
      <footer class="py-5 bg-dark ">
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






  



