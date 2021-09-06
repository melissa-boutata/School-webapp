<?php

class AjouterHeureView{

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
            <a class="navbar-link" href="/ProjetWeb/Logout">Log out</a>
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

        <form action="/ProjetWeb/AjouterHeure" method="POST">
            <h3>Ajouter les heures de réception du prof <?php echo $ens["nom"]?> </h3>
            <br>
            <br>
            <br>
        <div class="row"> 
            <div class="col-lg-6 col-md-6 mb-4">
            <input type="hidden" id="id" name="id" value="<?php echo $ens["id"]?>"> 
            <label for="jour1">Jour de réception 1</label>
                <select  name="jour1" id="jour1" >
                    <option <?php if($ens["jour1"] == "Dimanche") echo 'selected';?> value="Dimanche">Dimanche</option>
                    <option <?php if($ens["jour1"] == "Lundi") echo 'selected';?> value="Lundi">Lundi</option>
                    <option <?php if($ens["jour1"] == "Mardi") echo 'selected';?> value="Mardi">Mardi</option>
                    <option <?php if($ens["jour1"] == "Mercredi") echo 'selected';?> value="Mercredi">Mercredi</option>
                    <option <?php if($ens["jour1"] == "Jeudi") echo 'selected';?> value="Jeudi">Jeudi</option>
               
                </select>  
                <label for="">Heure de réception 1</label>
            <input  type="time" id="heure1" name="heure1" placeholder="Heure de Réception" value=<?php echo $ens["heure1"] ?> >

            
    </div> 
    <div class="col-lg-6 col-md-6 mb-4">  
            

            <label for="jour2">Jour de réception 2</label>
                <select  name="jour2" id="jour2" >
                    <option <?php if($ens["jour2"] == "Dimanche") echo 'selected';?> value="Dimanche">Dimanche</option>
                    <option <?php if($ens["jour2"] == "Lundi") echo 'selected';?> value="Lundi">Lundi</option>
                    <option <?php if($ens["jour2"] == "Mardi") echo 'selected';?> value="Mardi">Mardi</option>
                    <option <?php if($ens["jour2"] == "Mercredi") echo 'selected';?> value="Mercredi">Mercredi</option>
                    <option <?php if($ens["jour2"] == "Jeudi") echo 'selected';?> value="Jeudi">Jeudi</option>
               
            </select> 
         
 
            <label for="">Heure de réception 2</label>
            <input  type="time" id="heure2" name="heure2" placeholder="Heure de Réception" value=<?php echo $ens["heure2"] ?> >
    </div>   
    </div>
            <input type="submit" value="Ajouter les heures">
            </form>
	</div>
        
</body>
</html>
    <?php
    }

}
?>