<?php

class LoginModel {
public function getlogin()
{

    session_start();
 
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        return "login";
        exit;
    }
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
           if($username[0]=="s"){
            //Student 
            $sql = "SELECT ID_student, Username, Passwd FROM etudiant WHERE Username = :username";
            $type_id="ID_student";
           }elseif($username[0]=="i"){ //Instructor
            $sql = "SELECT ID_student, Username, Passwd FROM enseignant WHERE Username = :username";
            $type_id="ID_ens";
           }else{//Tuteur
            $sql = "SELECT ID_student, Username, Passwd FROM parent WHERE Username = :username";
            $type_id="ID_parent";
           }
           
           if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
    
            $param_username = trim($_POST["username"]);
            
          
            if($stmt->execute()){
    
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row[$type_id];
                        $username = $row["Username"];
                        $hashed_password = $row["Passwd"];
                        if($password == $hashed_password){
                          
                            session_start();
                           
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            
                             return "login";
                          
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
 