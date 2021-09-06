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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/ProjetWeb/"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="facebook.com"><i class="fa fa-facebook"></i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="twitter.com"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="linkedin.com"><i class="fa fa-linkedin"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="instagram.com"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php 
    }
  public function diaporama($images) {
    ?>
    <div class="slider">
      <div class="slides">

        <?php foreach($images as $image){?>  
        <div class="slide"><img src="<?php echo $image["lien_image"] ?>"></div>
      <?php }?>
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
          <a class="nav-link" href="/ProjetWeb/">Accueil
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
       <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
          
        <div class="card mb-4 shadow-sm border-primary " style="border-width: 3px;" >
        <img class="card-img-top" src=" <?php echo $articles[0]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body"  >
             <h4 class="card-title h-25"><?php echo $articles[0]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[0]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[0]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[0]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;" >
        <img class="card-img-top" src=" <?php echo $articles[1]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body"  >
             <h4 class="card-title"><?php echo $articles[1]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[1]["description"],0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[1]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[1]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[2]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body" >
             <h4 class="card-title"><?php echo $articles[2]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[2]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[2]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[2]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[3]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body"  >
             <h4 class="card-title"><?php echo $articles[3]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[3]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[3]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
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
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[4]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body"  >
             <h4 class="card-title"><?php echo $articles[4]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[4]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[4]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[4]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[5]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[5]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[5]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[5]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[5]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[6]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body"  >
             <h4 class="card-title"><?php echo $articles[6]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[6]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[6]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
                </div>
                <small class="text-muted"><?php echo $articles[6]["date"] ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
        <img class="card-img-top" src=" <?php echo $articles[7]["image"] ?> " alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $articles[7]["titre"] ?></h4>
              <p class="card-text"><?php echo substr($articles[7]["description"], 0, 120) . '...' ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/ProjetWeb/PublicArticles/<?php echo $articles[7]["id"]; ?>"  class="btn btn-primary">Lire plus</a>
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
        <div style="margin:20px">
          <div class=" clearfix">
            <a href="/ProjetWeb/PaginationArticles"> <button type="button" class="btn btn-primary float-right ml-2">Voir tous les articles</button></a>
          </div>
        </div>
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






  



