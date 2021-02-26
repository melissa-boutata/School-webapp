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
    <link href="../public/css/style.css" rel="stylesheet">
    <link href="../public/css/profile.css" rel="stylesheet">

      <style>
  .emp-profile {
  padding: 3%;
  margin-top: 3%;
  margin-bottom: 3%;
  border-radius: 0.5rem;
  background: #fff;
}
.profile-img {
  text-align: center;
}
.profile-img img {
  width: 70%;
  height: 100%;
}
.profile-img .file {
  position: relative;
  overflow: hidden;
  margin-top: -20%;
  background: #212529b8;
}
.profile-img .file input {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.profile-head h5 {
  color: #333;
}
.profile-head h6 {
  color: #0062cc;
}
.profile-edit-btn {
  border: none;
  border-radius: 1.5rem;
  width: 70%;
  padding: 2%;
  font-weight: 600;
  color: #6c757d;
  cursor: pointer;
}
.proile-rating {
  font-size: 12px;
  color: #818182;
  margin-top: 5%;
}
.proile-rating span {
  color: #495057;
  font-size: 15px;
  font-weight: 600;
}
.profile-head .nav-tabs {
  margin-bottom: 5%;
}
.profile-head .nav-tabs .nav-link {
  font-weight: 600;
  border: none;
}
.profile-head .nav-tabs .nav-link.active {
  border: none;
  border-bottom: 2px solid #0062cc;
}
.profile-work {
  padding: 14%;
  margin-top: -15%;
}
.profile-work p {
  font-size: 12px;
  color: #818182;
  font-weight: 600;
  margin-top: 10%;
}
.profile-work a {
  text-decoration: none;
  color: #495057;
  font-weight: 600;
  font-size: 14px;
}
.profile-work ul {
  list-style: none;
}
.profile-tab label {
  font-weight: 600;
}
.profile-tab p {
  font-weight: 600;
  color: #0062cc;
}

      </style>
    </head>


    <?php
    }
    public function afficher($data) {

        /*echo $data[1];
        echo $data[2];*/ 


?>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="data:image/png;base64,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" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
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
                                        Etudiant en  <?php echo "$data[12] [$data[11]] " ?>
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id de l'étudiant</label>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<?php }
}