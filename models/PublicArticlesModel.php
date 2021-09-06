<?php

class PublicArticlesModel{

 public function __construct()
 {}

public function getArticle($id)
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
            $sql = "SELECT * FROM article WHERE ID_article= :id";
           
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_article, PDO::PARAM_STR);
        
                $param_article = $id;

                $article=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                    'date'=>'',
                    'texte'=>'',
                ];
                if($stmt->execute()){
                   $row = $stmt->fetch();
                        $article["id"]=$row["ID_article"];
                        $article["titre"]=$row["Title"];
                        $article["image"]=$row["Img"];
                        $article["texte"]=$row["Description"];
                        $article["date"]=$row["Date"];
                    return $article;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

}
?>

           
         
    
          