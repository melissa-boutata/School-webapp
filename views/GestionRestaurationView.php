<?php 
class GestionRestaurationView{
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
            <a class="navbar-link" href="/ProjetWeb/Logout">Log out</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </nav>

      <?php 
    }
    public function afficherMenu($menu){

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
						<h2>Gestion de<b>la restauration </b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/ProjetWeb/AjouterRepas" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Ajouter Repas</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Jour</th>
                        <th>Cycle</th>
                        <th>Entrée</th>
                        <th>Plat principal</th>
                        <th>Dessert</th>
                        <th>Action</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($menu as $repas) { ?>
					<tr>
					<?php $id=$repas["id"] ?>
                		
                        <input type="hidden" id="id" name="id" value="<?php echo $repas["id"]?>"> 

						<td><?php echo $repas["date"]?></td>
                        <td><?php echo $repas["cycle"]?></td>
                        <td><?php echo $repas["entree"]?></td>
                        <td><?php echo $repas["plat"]?></td>
                        <td><?php echo $repas["dessert"]?></td>
                    
						
						<td>
							<a href="/ProjetWeb/ModifierRepas/<?php echo $repas["id"]?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
							<a href="#deleteRepasModal<?php echo $repas["id"]; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
						</td>
					</tr>
					
					<!-- Delete Modal HTML-->
						<div id="deleteRepasModal<?php echo $repas["id"]; ?>" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="/ProjetWeb/SupprimerRepas/<?php echo $repas["id"]?>" method="POST">
										<div class="modal-header">						
											<h4 class="modal-title">Supprimer un repas</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">					
											<p>Voulez-vous vraiment supprimer le repas de ce jour?</p>
											<p class="text-warning"><small>Ce repas ne pourra pas etre restauré</small></p>
										</div>
										<div class="modal-footer">
											<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											<input type="submit" class="btn btn-danger" value="Delete">
										</div>
									</form>
								</div>
							</div>
						</div>

                    <?php } ?>
					
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

