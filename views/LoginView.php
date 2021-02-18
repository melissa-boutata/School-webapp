<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>

        <div id="container">
            <!-- zone de connexion -->
            <?php
            echo $reslt;
            ?>
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input id="username" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input id="password" type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN'>
                
            </form>
        </div>
   
</body>
</html>