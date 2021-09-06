<?php

class EspaceParentView{
  
  public function entete(){
    ?>
    <!doctype html>
    <html lang="en">
        <head>
      
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link href="public/css/gestionarticle.css" rel="stylesheet">

        </head>
  
        <?php
        }
        public function navbar(){
          ?>
  <!-- Navigation -->
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <a class="navbar-link" href="/ProjetWeb/Login">Log In</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
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
        <li class="nav-item ">
          <a class="nav-link" href="/ProjetWeb/EspaceEtudiant">Espace élèves</a>
        </li> 
        <li class="nav-item active">
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

  public function afficher($cadres){
?>
    <!-- Page Content -->
 
    <br>
    <br>
    <br>
    
    <!-- Page Content -->
    <div class="container">
      <br> 
       <!-- Page Features -->
      <div class="row text-center">
      <?php for($i=0;$i<4;$i++){ ?>
        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $cadres[$i]["titre"] ?></h4>
              <p class="card-text"><?php echo $cadres[$i]["contenu"] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <small class="text-muted"><?php echo $cadres[$i]["date"] ?></small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        </div>
        <!-- /.row -->

         <!-- Page Features -->
      <div class="row text-center">
      <?php for($i=4;$i<8;$i++){ ?>
        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm border-primary" style="border-width: 3px;">
            <div class="card-body">
             <h4 class="card-title"><?php echo $cadres[$i]["titre"] ?></h4>
              <p class="card-text"><?php echo $cadres[$i]["contenu"] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <small class="text-muted"><?php echo $cadres[$i]["date"] ?></small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
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
        <li class="nav-item active">
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






  



