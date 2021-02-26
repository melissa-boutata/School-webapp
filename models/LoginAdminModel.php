<?php

class LoginAdminModel{
public function getlogin()
{

    require_once "config/config.php";
    
    $username = $password = "";
    $username_err = $password_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        // Check if username is empty
        if(!empty(trim($_POST[""]))){
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
           
        $sql = "SELECT ID_admin, Username, Passwd FROM admin WHERE Username = :username";
           if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            $param_username = trim($_POST["username"]);
            
          
            if($stmt->execute()){
    
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["ID_admin"];
                        $username = $row["Username"];
                        $hashed_password = $row["Passwd"];
                        if($password == $hashed_password){
                          
                            session_start();
                           
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["type"] = "admin";                
                              return "admin";
                          
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
 