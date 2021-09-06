<?php
Class PresentationView {

    public function entete(){
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <?php }

    public function navbar(){
          ?>
  <!-- Navigation -->
  <body>
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/ProjetWeb/">Tatawor School</a>
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
    public function description($data){
?>
    <body>
        <div class="container">

        <?php foreach($data as $description)
        { if($description["id"]%2==0)
            { 
            ?>
            <!-- Heading Row -->
            <div class="row align-items-center my-5">
            <div class="col-lg-7">
            
                <img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo $description["image"] ?> " alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">École Tatawour</h1>
                <p>  <?php echo $description["contenu"] ?></p>
            </div>
            <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        <?php
        } else { ?>
            <!-- Heading Row -->
            <div class="row align-items-center my-5">
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">École Tatawour</h1>
                <p>  <?php echo $description["contenu"] ?></p>
            </div>
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo $description["image"] ?> " alt="">
            </div>
            
            <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        <?php 
        }
    }
        ?>
    </div>

    <?php }
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