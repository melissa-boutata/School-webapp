<?php

class LoginModel {
public function getlogin()
{
    require_once "config/config.php";
    
    $username = $password = "";
    $username_err = $password_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
    
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        if(empty($username_err) && empty($password_err)){
            // Check the username first letter to know to which type this user belongs

            $type=$_POST['radio'];
            $sql = "SELECT ID_user,Username,Password FROM utilisateur WHERE Username =:username && Type=:type";
        
           if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":type", $param_type, PDO::PARAM_STR);
            
    
            $param_username = trim($_POST["username"]);
            $param_type=$type;
          
            if($stmt->execute()){
    
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["ID_user"];
                        $username = $row["Username"];
                        $hashed_password = $row["Password"];
                        if($password == $hashed_password){
                          
                            session_start();
                           
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["type"] = $type;                
                
                             return $type;
                          
                        } else{
                            
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            unset($stmt);
        }
    }

    unset($pdo);    
}
}
}
?>
 