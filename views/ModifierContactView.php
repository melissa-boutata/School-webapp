<?php

class ModifierContactView{

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

public function afficherForm($contact){ ?>

	<br>
	<br>
	<br>
	<div class="container"> 
    
    <form action="/ProjetWeb/ModifierContact" method="POST">
            <h3>Modifier les informations de contact</h3>
            <br>
            <br>
            <br> 

    
            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Nom de l'école</label>
                <input type="text" id="nom" name="nom" value="<?php echo $contact["nom"] ?>" required>
    
            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Adresse de l'école</label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $contact["adresse"] ?>" required>
            </div>  
            </div>
            
           
            <label for="">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $contact["email"] ?>" required >

            <div class="row"> 
        
            <div class="col-lg-4 col-md-4 mb-4">
                <label for="">Numéro de télephone 1</label>
                <input type="number" id="phone1" name="phone1" value="<?php echo $contact["phone1"] ?>" required> </input>
    
            </div>
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 2</label>
                <input type="number" id="phone2" name="phone2" value="<?php echo $contact["phone2"] ?>"  required>
            </div>  
            <div class="col-lg-4 col-md-4 mb-4" > 
                <label for="">Numéro de télephone 3</label>
                <input type="number" id="phone3" name="phone3" value="<?php echo $contact['phone3'] ?>" required  >
            </div>   
            </div>
            
            <div class="row"> 
        
            <div class="col-lg-6 col-md-6 mb-4">
                <label for="">Fix de l'école</label>
                <input type="number" id="fixe" name="fixe" value="<?php echo $contact["fixe"] ?>" required>

            </div>
            <div class="col-lg-6 col-md-6 mb-4" > 
                <label for="">Fax de l'école</label>
                <input type="number" id="fax" name="fax" value="<?php echo $contact["fax"] ?>" required>
            </div>  
            </div>
        <input type="submit" value="Modifier informations">
		</form>
	</div>
</body>
</html>
    <?php
    }

}
?>