<?php 
class GestionPresentationView{
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

            <script>

$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
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
    public function afficherPresentation($paragraphes){

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
						<h2>Gestion des<b> paragraphes de la présentation</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/ProjetWeb/AjouterPresentation" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Ajouter Paragraphe</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($paragraphes as $paragraphe) { ?>
					<tr>
                		
						<td><?php echo $paragraphe["contenu"]?></td>
					
                        <input type="hidden" id="id" name="id" value="<?php echo $paragraphe["id"]?>"> 
                        <td><img> 
                        <img  src="<?php echo $paragraphe["image"]?>" alt="" style="height: 10rem;">
                        </td>
						
						<td>
							<a href="/ProjetWeb/ModifierPresentation/<?php echo $paragraphe["id"]?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
							<a href="#deletePresentationModal<?php echo $paragraphe["id"]?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deletePresentationModal<?php echo $paragraphe["id"]?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="/ProjetWeb/SupprimerPresentation/<?php echo $paragraphe["id"]?>" method="POST">
									<div class="modal-header">						
										<h4 class="modal-title">Supprimer un paragraphe</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Voulez-vous vraiment supprimer ce paragraphe</p>
										<p class="text-warning"><small>Ce paragraphe ne pourra pas etre restauré</small></p>
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

