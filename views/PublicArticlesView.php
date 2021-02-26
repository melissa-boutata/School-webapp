<?php

class PublicArticlesView{
  
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
    
    <div class="container section">
            <div class="row">
                <div class="col-md-8">
                    <h3>
                  
                        <?php echo "[Article N°". $articles["id"]. "]:  " . $articles["titre"] ; ?>
                    </h3>
                    <p>
                        <?php echo $articles["texte"] ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $articles["image"] ?>" width="300" height="300" alt=""/>
                    <p style="text-align:left">
                        <b>Article publié le <?php echo $articles["date"] ?>
                    </p>
                </div>
                
            </div>
  </div>
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






  



