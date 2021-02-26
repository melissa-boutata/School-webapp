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
            <a class="navbar-link" href="/ProjetWeb/AdminLogout">Log out</a>
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

		<label for="users">Destiné à:</label>
		<select name="users" id="users">
			<option value="Tous">Tous</option>
			<option value="Primaire">Primaire</option>
			<option value="Moyen">Moyen</option>
			<option value="Secondaire">Secondaire</option>
			<option value="Parent">Parent</option>
			<option value="Eleve">Elèves</option>
			<option value="Enseignant">Enseignant</option>
		</select>    
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