<?php

class CreerClasseView{

    public function entete(){
        ?>
        <!doctype html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link href="public/css/ajouterarticle.css" rel="stylesheet">
           
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
            <a class="navbar-link" href="/ProjetWeb/Logout">Log out</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </nav>
    <?php }

    public function afficherForm(){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 

        <form action="/ProjetWeb/CreerClasse" method="POST">
            <h3>Créer une nouvelle classe</h3>
            <br>
            <br>
            <br> 
            <label for="cycle">Cycle</label>
                <select name="cycle" id="cycle" required>
                    
                    <option value="Primaire">Primaire</option>
                    <option value="Moyen">Moyen</option>
                    <option value="Secondaire">Secondaire</option>
            
                </select>    
            
            <label for="">Niveau</label>
            <input type="number" id="niveau" name="niveau" placeholder="1 pour 1ére année,2 pour 2éme année..." required>

            <label for="">Classe N°</label>
            <input type="number" id="classe" name="classe" placeholder="Classe numéro:1,2,3.." required>
            
            <label for="annee">Année Scolaire</label>
                <select name="annee" id="annee" required>
                    
                    <option value="2020/2021">2020/2021</option>   

                </select>  
        <input type="submit" value="Créer la classe">
		</form>
	</div>
        
</body>
</html>
    <?php
    }

}
?>