<?php

class AjouterClasseView{

    public function entete(){
        ?>
        <!doctype html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link href="../public/css/ajouterarticle.css" rel="stylesheet">
           
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
    <?php }

    public function afficherForm($ens){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 

        <form action="/ProjetWeb/AjouterClasse" method="POST">
            <h3>Ajouter une classe au prof <?php echo $ens["nom"]  ?></h3>
            <br>
            <br>
            <br> 
            <input type="hidden" id="id_ens" name="id_ens" value="<?php echo $ens["id"]?>"> 
            
            <label for="">Classe</label>
            <input type="text" id="classe" name="classe" placeholder="Classe" required>

            <label for="">Nombre d'heure de travail</label>
            <input type="number" id="nbheure" name="nbheure" placeholder="Nombre d'heure" required >
        
        <input type="submit" value="Ajouter classe">
		</form>
	</div>
        
</body>
</html>
    <?php
    }

}
?>