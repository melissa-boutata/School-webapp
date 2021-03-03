<?php 
class EnsSecondaireView{
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
            <link href="public/css/listeens.css" rel="stylesheet">
</head>
      
<?php
}
    
    public function afficherEns($enseignants){

?>
<body>
<br>
<br>
<br>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Liste des<b> enseignants</b> du cycle primaire</h2>
					</div>

				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nom et prénom</th>
						<th>Email</th>
                        <th>Horaire de réception</th>
                        <th>Horaire de réception</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($enseignants as $ens) { ?>
					<tr>
						<td><?php echo $ens["nom"]. " "; echo $ens["prenom"];?></td>
						<td><?php echo $ens["email"]?></td>
						
                        <?php if($ens["heure1"]==NULL && $ens["jour2"]==NULL ) {?>
							<td>Aucune heure définie</td>
							<?php 
						}else { ?>
								<td><?php echo " || " . $ens["jour1"] . " à " . $ens["heure1"]. " || "; 
								?></td>
						<?php
						}?>

						<?php if($ens["heure2"]==NULL && $ens["jour2"]==NULL ) {?>
							<td>Aucune heure définie</td>
							<?php 
						}else { ?>
								<td><?php echo " || " . $ens["jour2"] . " à " . $ens["heure2"]. " || "; 
								?></td>
						<?php
						}?>
                        <input type="hidden" id="id" name="id" value="<?php echo $ens["id"]?>"> 
                        
					</tr>

                    <?php } 
					?>
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

