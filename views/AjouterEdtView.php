<?php

class AjouterEdtView{

    public function entete(){
        ?>
        <!doctype html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link href="public/css/gestionpresentation.css" rel="stylesheet">


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

      <?php 
    }


public function afficherForm($listeEns,$listeClasse){ ?>

<br> 
<br>
<br>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion des<b> emplois du temps </b></h2>
					</div>
         <form action="/ProjetWeb/AjouterEdt/" method="POST"> 
					<div class="col-sm-6">
                    Jour: <select name="jour" id="jour"> 
                            <option value="Dimanche">Dimanche</option>
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                    </select>

                    Classe: <select name="classe" id="classe">
                    <?php
                    foreach($listeClasse as $classe){ ?> 
                        <option value="<?php echo $classe["nom"] ?>"><?php echo $classe["nom"] ?></option>
                    <?php } ?> 
                </select>   
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Séance x</th>
                        <th>Matière</th>
                        <th>Enseignant</th>
                        <th>Heure de début</th>
                        <th>Heure de fin</th>
                        <th>Salle </th>
                        <th>Actions</th>
                        
					</tr>
				</thead>
				<tbody>
    <?php for ($i=1;$i<=5;$i++) 
    {
    ?>
      <tr>
        <td>Séance <?php echo $i; ?></td>
        <td>
          <input type="text" id="matiere<?php echo $i; ?>" name="matiere<?php echo $i; ?>" style="width: 45px; padding: 1px"> 
        </td>
        <td>
               <select id="ens<?php echo $i; ?>" name="ens<?php echo $i; ?>">
                    <?php
                    foreach($listeEns as $prof){ ?> 
                        <option value="<?php echo $prof["firstName"] ?>"><?php echo $prof["firstName"] ?></option>
                    <?php } ?> 
                </select>  
        </td>
        <td>
         <input type="time" id="heureD<?php echo $i; ?>" name="heureD<?php echo $i; ?>" style="width: 45px; padding: 1px"> 
        </td>

        <td>
       <input type="time" id="heureF<?php echo $i; ?>" name="heureF<?php echo $i; ?>" style="width: 45px; padding: 1px"> 
        </td>
        <td>
          <input type="text" id="salle<?php echo $i; ?>" name="salle<?php echo $i; ?>" style="width: 45px; padding: 1px"> 
        </td>
        
      </tr>
    
      
      <?php } ?>
      
            <input type="submit" value="Ajouter les séances du jour">
	
    </form>
				</tbody>
			</table>
	
	</div>        
</div>
	
        
</body>
</html>
    <?php
    }

}
?>
