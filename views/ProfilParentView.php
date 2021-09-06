<?php
Class ProfilParentView{

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
    public function afficher($data) {
?>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
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
                                        Parent d'élève(s)
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="liste-tab" data-toggle="tab" href="#liste" role="tab" aria-controls="liste" aria-selected="false">Listes des enfants</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier Profil"  style="background-color:#007BFF;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                   
                          
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID du parent tuteur</label>
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
                                                <label>Adresse de résidence</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo "$data[8]" ?></p>
                                            </div>
                                        
                                        </div>
                            </div>
<div class="tab-pane fade" id="liste" role="tabpanel" aria-labelledby="liste-tab">
                            
                                              
        <section id="tabs" class="project-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="nav-tabContent">
                                        <table class="table" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID de l'enfant</th>
                                                    <th>Nom & Prénom</th>
                                                    <th>Accédez au profil</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i=9;$i<sizeof($data);$i++) {?>
                                                <tr>
                                                    <td><a ><?php echo $data[$i]["id_etud"]?></a></td>
                                                    <td><?php echo $data[$i]["nom"] . " " . $data[$i]["prenom"]; ?></td>
                                                    <td> <a href="/ProjetWeb/ProfilEnfant/<?php echo $data[$i]["id_etud"]?>">Accéder au profil </a></td>
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


