<?php

class AdminPanelView{
  
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
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-link" href="/ProjetWeb/AdminLogout">Log out</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </nav>


  <?php 
    }

  public function cadres(){
?>

<br> 
<br>
<br>

    <!-- Page Content -->
    <div class="container">
      <br> 
       <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion des différents articles</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion la présentation</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion les emplois du temps</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion des enseignants</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
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
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion des utilisateurs</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion de la restauration</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion de la page contact</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" >
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="public/assets/article.jpg" alt="" style="height: 10rem;">
            <div class="card-body">
             <h4 class="card-title">Gestion du diaporama</h4>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href=""  class="btn btn-primary">Gérer</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

    
        </div>
        <!-- /.row -->
      
        </div>
        <!-- /.container -->
        </div>

    
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






  



