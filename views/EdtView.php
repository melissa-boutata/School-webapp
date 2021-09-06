<?php
Class EdtView{

    public function entete(){
?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="../public/css/style.css" rel="stylesheet">
        <link hre="../public/css/edt.css" rel="stylesheet">
    </head>

    </head>
    <?php
    }
    
  public function menu(){
    ?>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/ProjetWeb/">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Presentation">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Primaire">Cycle Primaire</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/ProjetWeb/Moyen">Cycle Moyen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceEtudiant">Espace élèves</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceParent">Espace parents</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Contact">Contact</a>
        </li> 
      </ul>
    </div>
    </div>
    </nav>
<?php 
  }
    public function afficher($allEdt,$classes) {
?>  
<body> 
<div class="container">
<?php 
$i=0;
foreach ($allEdt as $edt) {
   
    ?>
<table border="2" cellspacing="3" align="center">
 
<h3 align="center"> Emplois du temps de la classe <?php  echo $classes[$i]["nom_classe"];
    $i++; ?> </h3>
   <tr>
   <td align="center">
   <td>8:00-9:00
   <td>9:00-10:00
   <td>10:00-11:00
   <td>11:00-12:00
   <td>12:00-13:00
   <td>13:00-14:00
   <td>14:00-15:00
   <td>15:00-16:00
   </tr>
   <?php foreach($edt as $jour){ ?>
   <tr>
      
       <td align="center"><?php echo $jour[0]["jour"]?>

       <td align="center"><?php echo $jour[0]["nom_matiere"]  ." <p>".  "Salle" . $jour[0]["salle"] ?>
       <td align="center"><font color="orange"><?php echo $jour[1]["nom_matiere"]  ." <p>".  "Salle" . $jour[1]["salle"] ?> <BR>
       <td align="center"><font color="maroon"><?php echo $jour[2]["nom_matiere"]  ." <p>".  "Salle" . $jour[2]["salle"] ?><br>
       <td align="center"><font color="blue"><?php echo $jour[3]["nom_matiere"]  ." <p>".  "Salle" . $jour[3]["salle"] ?><br>
       <td align="center">---
       <td align="center"><font color="pink"><?php echo $jour[4]["nom_matiere"]  ." <p>".  "Salle" . $jour[4]["salle"] ?><br>
       <td align="center"><font color="brown"><?php echo $jour[5]["nom_matiere"]  ." <p>".  "Salle" . $jour[5]["salle"] ?><br>
       <td align="center"><?php echo $jour[6]["nom_matiere"]  ." <p>".  "Salle" . $jour[6]["salle"] ?>
   </tr>
   <?php }
}
   ?>
   </table>

   </div>
   <br>
<?php }
   public function piedsdepage(){
    ?>
      <!-- Footer -->
      <footer class="py-5 bg-dark fixed-bottom">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Presentation">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Primaire">Cycle Primaire</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/ProjetWeb/Moyen">Cycle Moyen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Secondaire">Cycle Secondaire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceEtudiant">Espace élèves</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/EspaceParent">Espace parents</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/ProjetWeb/Contact">Contact</a>
        </li> 
      </ul>
    </div>
    </div>
    </nav>
          <p class="m-0 text-center text-white">Copyright &copy; 2021</p>
        </div>
        <!-- /.container -->
      </footer>
                       
  </body>
   </html>
<?php }

}

?>


