<?php

class AjouterPresentationView{

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

        <form action="/ProjetWeb/AjouterPresentation" method="POST">
            <h3>Ajouter un paragarphe</h3>
            <br>
            <br>
            <br> 
            
            <label for="">Image</label>
            <input type="text" id="image" name="image" placeholder="Image" >
            <label for="">Corps du paragraphe</label>
            <textarea type="text" id="contenu" name="contenu"  rows="6" required> </textarea>
        
        <input type="submit" value="Ajouter paragraphe">
		</form>
	</div>
        
</body>
</html>
    <?php
    }

}
?>