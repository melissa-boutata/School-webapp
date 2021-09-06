<?php
Class ProfilEtud {

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
        <link href="public/css/style.css" rel="stylesheet">
        <link href="public/css/profile.css" rel="stylesheet">
        <link hre="public/css/edt.css" rel="stylesheet">
    </head>

    </head>
<?php }
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
    public function afficher($data,$edt,$notes,$activites) {
?>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://www.oseyo.co.uk/wp-content/uploads/2020/05/empty-profile-picture-png-2.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Changer Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo "$data[2] $data[3]" ?>
                                    </h5>
                                    <h6>
                                        Étudiant à la classe <?php echo $data [12]?>
                                    </h6>
                                    <p class="proile-rating">CLASSEMENT : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Emlpoi du temps</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="note-tab" data-toggle="tab" href="#note" role="tab" aria-controls="note" aria-selected="false">Notes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier Profil" style="background-color:#007BFF;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-work">
                            <p>Activités extra-scolaires</p>
                            <?php for ($j=0;$j<3;$j++){ ?>

                                <p><?php $n=$j+1;
                                if($activites[$j]!=NULL){
                                    echo " Activité $n: " .  $activites[$j];
                                }else {
                                    echo "//";
                                }
                                ?>
                                </p>
                          
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID de l'étudiant</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo "$data[0]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom et prénom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo "$data[2] $data[3]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo "$data[4]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Numéro de téléphone1</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo "$data[5]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Numéro de téléphone2</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo "$data[6]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Numéro de téléphone3</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php if($data[7]==NULL) echo "//" ;
                                                else echo "$data[7]";
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date et lieu de naissance</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo "$data[8]" ?></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo "$data[9]" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adresse de résidence</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo "$data[10]" ?></p>
                                            </div>
                                        
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table border="2" cellspacing="3" align="center">
   
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
                                
                                <?php }?>
                                </table>
                                </div>
        <div class="tab-pane fade" id="note" role="tabpanel" aria-labelledby="note-tab">

                                                
        <section id="tabs" class="project-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="nav-tabContent">
                                        <table class="table" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Matière</th>
                                                    <th>Note</th>
                                                    <th>Remarques des enseignants</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($notes as $note) {?>
                                                <tr>
                                                    <td><a ><?php echo $note["matiere"]?></a></td>
                                                    <td><?php echo $note["note"]?></td>
                                                    <td><?php if($note["remarque"]==NULL){ echo "//";} else { echo $note["remarque"];}?></td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                   
                            </div>
                        </div>
                    </div>
        </section>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
  </body>
   </html>
<?php }

}

?>


