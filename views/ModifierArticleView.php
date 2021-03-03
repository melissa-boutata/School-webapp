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
	  <div class="row"> 
        <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Tous" id="Tous" value="Tous" <?php if($article["tous"] == "Oui") echo 'checked';?> >
      <label class="form-check-label" for="exampleRadios1">
      Tous
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Parents" id="Parents" value="Parents" <?php if($article["parents"] == "Oui") echo 'checked';?>>
      <label class="form-check-label" for="exampleRadios2">
      Parents
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Enseignants" id="Enseignants" value="Enseignants" <?php if($article["ens"] == "Oui") echo 'checked';?>>
      <label class="form-check-label" for="exampleRadios3">
      Enseignants
      </label>
    </div>
    </div>
    <div class="row">        
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Primaire" id="Primaire" value="Primaire" <?php if($article["primaire"] == "Oui") echo 'checked';?>>
      <label class="form-check-label" for="exampleRadios4">
      Primaire
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Moyen" id="Moyen" value="Moyen" <?php if($article["moyen"] == "Oui") echo 'checked';?>>
      <label class="form-check-label" for="exampleRadios4">
      Moyen
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Secondaire" id="Secondaire" value="Secondaire" <?php if($article["secondaire"] == "Oui") echo 'checked';?>>
      <label class="form-check-label" for="exampleRadios4">
      Secondaire
      </label>
    </div>
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