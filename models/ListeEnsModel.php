<?php

class ListeEnsModel {

 public function __construct()
 {}

public function getListeEns($cycle)
{   
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'tdw');
    
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }   
         $sql = "SELECT FirstName,LastName,Email FROM enseignant WHERE Cycle=:cycle ";
            
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":cycle", $param_cycle, PDO::PARAM_STR);
        
                $param_cycle = $cycle;
                $ens=[
                    'nom'=>'',
                    'prenom'=>'',
                    'email'=>'',
                ];
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $ens["nom"]=$row["FirstName"];
                        $ens["prenom"]=$row["LastName"];
                        $ens["email"]=$row["Email"];
                        array_push($data,$ens);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

}
?>

           
         
    
          