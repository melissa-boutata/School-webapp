<?php

class LoginUser{

public function entete(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<?php }
public function connexion(){
?> 
<body>

        <div id="container">
            
            <form action="/ProjetWeb/Login" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input id="username" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input id="password" type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label>
                    <input type="radio" name="radio" value="Etudiant">Etudiant
                    <span class="select"></span>
                </label>
                <label>
                    <input type="radio" name="radio" value="Enseignant">Enseignant
                    <span class="select"></span>
                </label>
                <label>
                    <input type="radio" name="radio" value="Parent">Parent
                    <span class="select"></span>
                </label>
                <input type="submit" id='submit' value='LOGIN'>
                
            </form>
        </div>
</body>
</html>


<?php 
} }
?>