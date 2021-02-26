<?php

class ModifierArticleView{

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

public function afficherForm($article){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 
    
		<form action="/ProjetWeb/ModifierArticle" method="POST">
		<h3>Modifier un article</h3>
        <br>
        <br>
	    <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">  
        <input type="hidden" id="id" name="id" value="<?php echo $article["id"]?>"> 
      
		<label for="">Titre</label>
		<input  type="text" id="titre" name="titre" placeholder="Titre de l'article" value=<?php echo $article["titre"] ?> required>  
		<label for="">Image</label>
		<input  type="text" id="image" name="image" placeholder="Image" value=<?php echo $article["image"] ?> required>

        <label for="">Date</label>
		<input  type="date" id="date" name="date" placeholder="Date de publication de l'article" value=<?php echo $article["date"] ?> required>
</div> 

<div class="col-lg-6 col-md-6 mb-4"> 
<label for="">Corps de l'article</label>
		<textarea type="text" id="texte" name="texte" placeholder="Corps de l'article" rows="6" value=""required> <?php echo $article["texte"] ?> </textarea>
		<label for="users">Destiné à:</label>
		<select  name="users" id="users" >
			<option <?php if($article["users"] == "Tous") echo 'selected';?> value="Tous">Tous</option>
			<option <?php if($article["users"] == "Primaire") echo 'selected';?> value="Primaire">Primaire</option>
			<option <?php if($article["users"] == "Moyen") echo 'selected';?> value="Moyen">Moyen</option>
			<option <?php if($article["users"] == "Secondaire") echo 'selected';?> value="Secondaire">Secondaire</option>
			<option <?php if($article["users"] == "Parent") echo 'selected';?> value="Parent">Parent</option>
			<option <?php if($article["users"] == "Eleve") echo 'selected';?> value="Eleve">Elèves</option>
			<option <?php if($article["users"] == "Enseignant") echo 'selected';?> value="Enseignant">Enseignant</option>
		</select>    
</div>
</div>
		<input type="submit" value="Modifier article">
		</form>
	</div>
</body>
</html>
    <?php
    }

}
?>