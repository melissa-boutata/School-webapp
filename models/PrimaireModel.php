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
            $sql = "SELECT * FROM article WHERE Primaire='Oui' ORDER BY Date DESC";
            
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

public function getEnsPrimaire(){

    require_once "config/config.php";
    $sql = "SELECT DISTINCT ID_ens FROM enseignement INNER JOIN classe ON enseignement.ID_classe=classe.ID_classe WHERE Cycle='Moyen'";
    $query = "SELECT  ID_ens,FirstName,LastName,Email,HeureReception1,HeureReception2,Jour1,Jour2 FROM enseignant WHERE ID_ens=:id_ens";
  
    if($stmt = $pdo->prepare($sql)){
        $ens=[
            'id'=>'',
            'nom'=>'',
            'prenom'=>'',
            'email'=>'',
            'heure1'=>'',
            'heure2'=>'',
            'jour1'=>'',
            'jour2'=>'',
        ];
      
        if($stmt->execute()){
            $data= array(); 
            for($i=0; $row = $stmt->fetch(); $i++){
                $id_ens=$row["ID_ens"];
    
                    if($result = $pdo->prepare($query)){
                        $result->bindValue(":id_ens", $id_ens);
                        if($result->execute()){
                            
                            for($j=0; $res = $result->fetch(); $j++){
                        
                                $ens["nom"]=$res["FirstName"];
                                $ens["prenom"]=$res["LastName"];
                                $ens["email"]=$res["Email"];
                                $ens["heure1"]=$res["HeureReception1"];
                                $ens["heure2"]=$res["HeureReception2"];
                                $ens["jour1"]=$res["Jour1"];
                                $ens["jour2"]=$res["Jour2"];            
                                array_push($data,$ens);
                            }
                        }
                    }
               
            }
            return $data;
        }
    }    
    unset($stmt);
    unset($pdo); 

}

}
?>
   
    
          