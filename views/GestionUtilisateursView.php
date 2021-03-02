<?php 
class GestionUtilisateursView{
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
            <link href="public/css/gestionarticle.css" rel="stylesheet">

            <script>


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
    public function gestionUtilisateurs($utilisateurs){

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
						<h2>Gestion des<b> utilisateurs</b></h2>
					</div>
					<div class="col-sm-6">
                     <div class="btn-group">
                        
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                        <i class="material-icons">&#xE147;</i> <span>Ajouter utilisateur</span></a>
                        </button>
                        <div class="dropdown-menu">
                            <a href="/ProjetWeb/AjouterUtilisateur/Admin" class="dropdown-item">Administrateur</a>
                            <a href="/ProjetWeb/AjouterUtilisateur/Etudiant" class="dropdown-item">Etudiant</a>
                            <a href="/ProjetWeb/AjouterUtilisateur/Enseignant" class="dropdown-item">Enseignant</a>
                            <a href="/ProjetWeb/AjouterUtilisateur/Parent" class="dropdown-item">Parent</a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Identifiant</th>
						<th>Email</th>
						<th>First Name</th>
                        <th>Last Name</th>
                        <th>Role </th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($utilisateurs as $utilisateur) { ?>
					<tr>
						
						<td><?php echo $utilisateur["id"]?></td>
                        <td><?php echo $utilisateur["email"]?></td>
						<td><?php echo $utilisateur["nom"]?></td>
                        
                        <input type="hidden" id="id" name="id" value="<?php echo $utilisateur["id"]?>"> 
                        <td><?php echo $utilisateur["prenom"]?></td>
						<td><?php echo $utilisateur["type"]?></td>
						<td>
							<a href="/ProjetWeb/ModifierUtilisateur/<?php echo $utilisateur["id"]?>/<?php echo $utilisateur["type"]?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
							<a href="#deleteArticleModal<?php echo $utilisateur["id"] ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
						</td>
					</tr>

			<!-- Delete Modal HTML-->
			<div id="deleteArticleModal<?php echo $utilisateur["id"] ?>" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="/ProjetWeb/SupprimerUtilisateur/<?php echo $utilisateur["id"]?>" method="POST">
							<div class="modal-header">						
								<h4 class="modal-title">Supprimer utilisateur</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<p>Voulez-vous vraiment supprimer cet utilisateur</p>
								<p class="text-warning"><small>Cet article ne pourra pas etre restauré</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-danger" value="Delete">
							</div>
						</form>
					</div>
				</div>
			</div>
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

