<?php 
class GestionContactView{
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
            <link href="public/css/contact.css" rel="stylesheet">

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
    public function gererContact($contact){

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
						<h2>Gestion de<b> la page contact</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/ProjetWeb/ModifierContact" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Modifier informations</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Champs</th>
                        <th>Valeurs</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nom de l'école</td>
                		
						<td><?php echo $contact["nom"]?></td>

					</tr>
                    <tr>
						<td>Adresse de l'école</td>
                		
						<td><?php echo $contact["adresse"]?></td>

					</tr>
                    <tr>
						<td>Email de l'école</td>
                		
						<td><?php echo $contact["email"]?></td>

					</tr>
                    <tr>
						<td>Numéro de mobile</td>
                		
						<td><?php echo $contact["phone1"]; 
                        echo "<br>"; echo $contact["phone2"]; echo "<br>";  
                        echo $contact["phone3"]; echo "<br>";
                        ?></td>

					</tr>
                    <tr>
						<td>Fixe de l'école</td>
                		
						<td><?php echo $contact["fixe"]?></td>

					</tr>
                    <tr>
						<td>Fax de l'école</td>
                		
						<td><?php echo $contact["fax"]?></td>

					</tr>

					
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

