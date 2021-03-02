<?php

class ModifierUtilisateurView{

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

public function afficherForm($utilisateur,$listeClasses){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 
    
    <form action="/ProjetWeb/ModifierUtilisateur" method="POST">
            <h3>Modifier un <?php echo $utilisateur["type"] ?></h3>
            <br>
            <br>
            <br> 

            <input type="hidden" id="type" name="type" value="<?php echo $utilisateur["type"] ?>"> 
            <input type="hidden" id="id" name="id" value="<?php echo $utilisateur["id"] ?>"> 

            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" value=<?php echo $utilisateur["username"] ?> required>
    
            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Mot de passe</label>
                <input type="password" id="password" name="password" value=<?php echo $utilisateur["password"] ?> required >
            </div>  
            </div>

            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Nom</label>
                <input type="text" id="nom" name="nom" value=<?php echo $utilisateur["nom"] ?> required>
    
            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Prénom</label>
                <input type="text" id="prenom" name="prenom" value=<?php echo $utilisateur["prenom"] ?> required>
            </div>  
            </div>
            
           
            <label for="">Email</label>
            <input type="email" id="email" name="email" value=<?php echo $utilisateur["email"] ?> required >

            <div class="row"> 
        
            <div class="col-lg-4 col-md-4 mb-4">
                <label for="">Numéro de télephone 1</label>
                <input type="number" id="phone" name="phone1" value=<?php echo $utilisateur["phone1"] ?> required>
    
            </div>
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 2</label>
                <input type="number" id="phone" name="phone2" value=<?php echo $utilisateur["phone2"] ?>  required>
            </div>  
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 3</label>
                <input type="number" id="phone" name="phone3" value=<?php echo $utilisateur["phone3"] ?>  >
            </div>  
            </div>
            <label for="">Adresse</label>
            <input type="text" id="adresse" name="adresse" value=<?php echo $utilisateur["adresse"] ?>  required>

           

            <!-- Si l'utilisateur est un étudiant on ajoute sa classe et l'ID de son parent-->
            <?php if($utilisateur["type"]=="Etudiant"){?>

                Classe: <select name="classe" id="classe">
                    <?php
                    foreach($listeClasses as $classe){ ?> 
			                <option <?php if($utilisateur["classe"] == $classe["id"]) echo 'selected';?> value="<?php echo $classe["id"]?>"> <?php echo $classe["nom"]?></option>      
                    <?php } ?> 
                </select>         
                <?php } ?>
            
        
        <input type="submit" value="Modifier utilisateur">
		</form>
	</div>
</body>
</html>
    <?php
    }

}
?>