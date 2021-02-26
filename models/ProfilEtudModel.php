<?php

class ProfilEtudModel {

 public function __construct()
 {}

public function getInfos()
{
   /* define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'projet_web');*/
 
        try{
            $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exc){
            die("ERROR: Could not connect. " . $exc->getMessage());
        }
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        
        // Récuperer les infos de la BDD 
        if ($_SESSION["type"] = "ID_student"){
            $sql = "SELECT ID_student, Username,FirstName,LastName,Email,PhoneNum1,PhoneNum2,PhoneNum3,BirthDate,BirthPlace,SchoolYear,Class FROM etudiant WHERE Username = :username";
             
            if($stmt = $pdo->prepare($sql)){
               
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
                $param_username = $_SESSION["username"];
               
                if($stmt->execute()){
                    $data[]=null;
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $data[0] = $row["ID_student"];
                            $data[1]=$row["Username"];
                            $data[2]=$row["FirstName"];
                            $data[3]=$row["LastName"];
                            $data[4]=$row["Email"];
                            $data[5]=$row["PhoneNum1"];
                            $data[6]=$row["PhoneNum2"];
                            $data[7]=$row["PhoneNum3"];
                            $data[8]=$row["BirthDate"];
                            $data[9]=$row["BirthPlace"];
                            $data[10]=$row["Address"];
                            $data[11]=$row["SchoolYear"];
                            $data[12]=$row["Class"];

                            return $data;
                  }
                }
            }    
        }
    }
}
            unset($stmt);
            unset($pdo); 
}

}
?>

           
         
    
          