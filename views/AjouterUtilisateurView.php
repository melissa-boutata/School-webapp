<?php

class AjouterUtilisateurView{

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

    public function afficherForm($type,$listeClasses,$listeParents){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 

        <form action="/ProjetWeb/AjouterUtilisateur" method="POST">
            <h3>Ajouter un <?php echo $type ?></h3>
            <br>
            <br>
            <br> 
            <input type="hidden" id="type" name="type" value="<?php echo $type ?>"> 

            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
    
            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required >
            </div>  
            </div>

            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Nom de l'utilisateur" required>
    
            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prénom de l'utilisateur" required >
            </div>  
            </div>
            
           
            <label for="">Email</label>
            <input type="email" id="email" name="email" placeholder="Email de l'utilisateur" required >

            <div class="row"> 
        
            <div class="col-lg-4 col-md-4 mb-4">
                <label for="">Numéro de télephone 1</label>
                <input type="number" id="phone" name="phone1" placeholder="Numéro de l'utilisateur" required>
    
            </div>
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 2</label>
                <input type="number" id="phone" name="phone2" placeholder="Numéro de l'utilisateur" required >
            </div>  
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 3</label>
                <input type="number" id="phone" name="phone3" placeholder=" [Optionnel]" required >
            </div>  
            </div>
            <label for="">Adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="Adresse de l'utilisateur" required>

           

            <!-- Si l'utilisateur est un étudiant on ajoute sa classe et l'ID de son parent-->
            <?php if($type=="Etudiant"){?>

                <div class="row">
                <div class="col-lg-6 col-md-6 mb-4" > 
                    <label for="">Date de naissance</label>
                    <input type="date" id="datenaissance" name="datenaissance" placeholder="Date de naissance de l'utilisateur" required>
                </div>
                
                <div class="col-lg-6 col-md-6 mb-4" > 
                    <label for="">Place de naissance</label>
                    <input type="text" id="placenaissance" name="placenaissance" placeholder="Place de naissance de l'utilisateur" required>
                </div> 
            </div>

                Classe: <select name="classe" id="classe">
                    <?php
                    foreach($listeClasses as $classe){ ?> 
                        <option value="<?php echo $classe["id"]?>"><?php echo $classe["nom"] ?></option>
                    <?php } ?> 
                </select> 

                Parent: <select name="parent" id="parent">
                    <?php
                    foreach($listeParents as $parent){ ?> 
                        <option value="<?php echo $parent["id"]?>"> <?php echo $parent["nom"]." "; echo $parent["prenom"];  ?></option>
                    <?php } ?> 
                </select> 
                
                <?php } ?>
            
        
        <input type="submit" value="Ajouter utilisateur">
		</form>
	</div>
        
</body>
</html>
    <?php
    }

}
?>