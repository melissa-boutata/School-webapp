<?php

class PrimaireModel {

 public function __construct()
 {}

public function getPrimaireArticles()
{   
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'projet_web');
     
    
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }
            $sql = "SELECT * FROM article WHERE ConcernedUser='Primaire' ORDER BY Date DESC";
            
            if($stmt = $pdo->prepare($sql)){
                $description=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                    'description'=>'',
                    'data'=>''
                ];
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $description["id"]=$row["ID_article"];
                        $description["titre"]=$row["Title"];
                        $description["image"]=$row["Img"];
                        $description["description"]=$row["Description"];
                        $description["date"]=$row["Date"];
                        array_push($data,$description);
                    }
                    return $data;
                   
                }
            }    
            unset($stmt);
            unset($pdo); 
}

}
?>

           
         
    
          