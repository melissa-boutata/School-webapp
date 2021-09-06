<?php

class AjouterArticleView{

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

		<form action="/ProjetWeb/AjouterArticle" method="POST">
		<h3>Ajouter un article</h3>
		<br>
		<br>
		<br>
		<div class="row">
        <div class="col-lg-6 col-md-6 mb-4">  
		<label for="">Titre</label>
		<input type="text" id="titre" name="titre" placeholder="Titre de l'article" required>

		<label for="">Image</label>
		<input type="text" id="image" name="image" placeholder="Image" required>
		
		<label for="">Date</label>
		<input type="date" id="date" name="date" placeholder="Date de publication de l'article" required>
	</div> 
	
    <div class="col-lg-6 col-md-6 mb-4">  
		<label for="">Corps de l'article</label>
		<textarea type="text" id="texte" name="texte"  rows="6" required> </textarea>
      <br>
      <br>
   
		<label for="users">Destiné à:</label>
	  <div class="row"> 
        <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Tous" id="Tous" value="Tous"  >
      <label class="form-check-label" for="exampleRadios1">
      Tous
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Parents" id="Parents" value="Parents">
      <label class="form-check-label" for="exampleRadios2">
      Parents
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Enseignants" id="Enseignants" value="Enseignants">
      <label class="form-check-label" for="exampleRadios3">
      Enseignants
      </label>
    </div>
    </div>
    <div class="row">        
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Primaire" id="Primaire" value="Primaire">
      <label class="form-check-label" for="exampleRadios4">
      Primaire
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Moyen" id="Moyen" value="Moyen">
      <label class="form-check-label" for="exampleRadios4">
      Moyen
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Secondaire" id="Secondaire" value="Secondaire">
      <label class="form-check-label" for="exampleRadios4">
      Secondaire
      </label>
    </div>
    </div>
	</div>
	</div>
		<input type="submit" value="Ajouter article">
		</form>
	</div>
	
	</body>
</html>
    <?php
    }
}
?>