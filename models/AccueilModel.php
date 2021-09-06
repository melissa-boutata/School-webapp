<?php

class AccueilModel {

 public function __construct()
 {}

public function getArticles()
{   
  
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=tdw", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }
      
            $sql = "SELECT * FROM article WHERE Tous='Oui' ORDER BY Date DESC";
            
            if($stmt = $pdo->prepare($sql)){
                $description=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                    'description'=>'',
                    'date'=>''
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


public function getImages(){
    require_once "config/config.php";
            $sql = "SELECT * FROM diaporama";
           
            if($stmt = $pdo->prepare($sql)){
                $image=[
                    'id_image'=>'',
                    'lien_image'=>'',
                ];
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $image["id_image"]=$row["ID_image"];
                        $image["lien_image"]=$row["lien"];
                        array_push($data,$image);
                    }
                    return $data;
                   
                }
            }    
            unset($stmt);
            unset($pdo); 

}  

}
?>

           
         
    
          