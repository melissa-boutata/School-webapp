<?php

class RestaurationView{
  
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
        .js-pscroll {
            position: relative;
            overflow: hidden;
            }
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

  public function afficher($listeRepas,$cycle){
?>
<br>
<br>
<br>

    <div class="container js-scroll"> 

<?php echo "<h1> Repas du cycle " .$cycle. "</h1>"?>

        <table class="table">
        <thead class="thead-dark ">
            <tr>
            <th scope="col">Jour</th>
            <th scope="col">Entrée</th>
            <th scope="col">Plat principal</th>
            <th scope="col">Dessert</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($listeRepas as $repas) { 
            
            if (date("Y-m-d")==$repas["date"]){
            ?>
            <tr class="table-active">
            <th scope="row"><?php echo $repas["date"]?></th>
            <td><?php echo $repas["entree"]?></td>
            <td><?php echo $repas["plat"]?></td>
            <td><?php echo $repas["dessert"]?></td>
            </tr>
            <?php } else { ?>

           <tr>
                
            <th scope="row"><?php echo $repas["date"]?></th>
            <td><?php echo $repas["entree"]?></td>
            <td><?php echo $repas["plat"]?></td>
            <td><?php echo $repas["dessert"]?></td>
            </tr>
            <?php } } ?>
        </tbody>
        </table>
  </div>
    
<?php 
  }
  public function piedsdepage(){
    ?>
      <!-- Footer -->
      <footer class="py-5 bg-dark fixed-bottom">
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






  



