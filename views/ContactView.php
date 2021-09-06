<?php 

class ContactView{
public function entete(){
        ?>
        <!doctype html>
        <html lang="en">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
               
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
                <link rel="stylesheet" href="public/css/contact.css"/>
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
      <li class="nav-item active">
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
      <li class="nav-item">
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

public function afficher($contact){
?>
<body>

<div class="container" id="container">
      
        <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3>École Tatawour</h3>
                <ul>
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Adresse & Email
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><i class="fa fa-road"> <?php echo $contact["adresse"] ?></i></li>
                      <li class="list-group-item"><i class="fa fa-envelope"> <?php echo $contact["email"] ?></i></li>
                    </ul>
                  </div>
                  <br>
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Mobile
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><i class="fa fa-phone"> <?php echo $contact["phone1"] ?></i></li>
                      <li class="list-group-item"><i class="fa fa-phone"> <?php echo $contact["phone2"] ?></i></li>
                      <li class="list-group-item"><i class="fa fa-phone"> <?php echo $contact["phone3"] ?></i></li>
                    </ul>
                  </div>
                  <br>
                  <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Fixe & Faxe
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><i class="fa fa-phone">  <?php echo $contact["fixe"] ?></i></li>
                      <li class="list-group-item"><i class="fa fa-phone"> <?php echo $contact["fax"] ?></i></li>
                    </ul>
                  </div>
                </ul>
                

            </div>
            <div class="contact">
                <h3>Envoyez-nous un email</h3>
                <form >
                    <p>
                        <label>Name</label>
                        <input type="text" name="name">
                    </p>
                    <p>
                        <label>Entreprise/École</label>
                        <input type="text" name="company">
                    </p>
                    <p>
                        <label>Email address</label>
                        <input type="email" name="email">
                    
                    </p>
                    <p>
                        <label>Phone number</label>
                        <input type="tel" name="phone">
                    </p>
                    <p class="full">
                        <label>Message</label>
                        <textarea name="message" rows="5" cols="30" rows="10"></textarea>
                    </p>
                    <p class="full">
                        <button>Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
}
}

?>