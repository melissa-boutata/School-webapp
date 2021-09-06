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
        <link href="../public/css/listeens.css" rel="stylesheet">
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
                  <li class="nav-item">
                    <a class="nav-link" href="/ProjetWeb/">Accueil
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
                  <li class="nav-item ">
                    <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire
                    <span class="sr-only">(current)</span>
                  </a>
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

  public function afficher($listeRepas,$cycle){
?>
<br>
<br>
<br>

    <div class="container js-scroll"> 


<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						 <?php echo "<h2> Repas du cycle " .$cycle. "</h2>"?>
					</div>

				</div>
			</div>
        <table class="table table-striped table-hover">
        <thead >
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
  		
	</div>        
</div>
</div>
    
<?php 
  }
  public function piedsdepage(){
    ?>
      <!-- Footer -->
      <footer class="py-5 bg-dark fixed-bottom ">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/ProjetWeb/">Accueil
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
        <li class="nav-item active">
          <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire
        </a>
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






  



