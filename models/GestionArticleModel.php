<?php 
class GestionArticleModel{
    
 public function __construct()
 {}

public function getAllArticles()
{   
         require_once "config/config.php";
            $sql = "SELECT * FROM article";
           
            if($stmt = $pdo->prepare($sql)){
                $article=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                    'date'=>'',
                    'texte'=>'',
                    'users'
                ];
                $data=array();
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $article["id"]=$row["ID_article"];
                        $article["titre"]=$row["Title"];
                        $article["image"]=$row["Img"];
                        $article["texte"]=$row["Description"];
                        $article["date"]=$row["Date"];
                        $article["users"]=$row["ConcernedUser"];
                        array_push($data,$article);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function addArticle(){

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "INSERT INTO `article` (`Title`, `Img`,`Description`,`Date`,`ConcernedUser`) VALUES (:title, :image,:texte,:date,:users)";
            
            $statement = $pdo->prepare($sql);
    
            $title= $_POST["titre"];
            $image= $_POST["image"];
            $texte= $_POST["texte"];
            $date=$_POST["date"];
            $users= $_POST["users"];
    
            $statement->bindValue(":title", $title);
            $statement->bindValue(":image", $image);
            $statement->bindValue(":texte", $texte);
            $statement->bindValue(":date", $date);
            $statement->bindValue(":users", $users);
             
            $inserted = $statement->execute();
             
            if($inserted){
             echo "<script type= 'text/javascript'>alert('Nouveel article inséré');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('L'article  n'a pas été inséré);</script>";
            }
            return $inserted;
          }


}
          
public function supprimerArticle($id){

    require_once "config/config.php";
    
            $sql = "DELETE FROM `article` WHERE ID_article=:id";
            
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_article, PDO::PARAM_STR);
        
                $param_article = $id;

                if($stmt->execute()){
                    return "Done";
                }
            }
}

public function getArticle($id)
{   
    
    require_once "config/config.php";
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
                    'users'=>'',
                ];
                if($stmt->execute()){
                   $row = $stmt->fetch();
                        $article["id"]=$row["ID_article"];
                        $article["titre"]=$row["Title"];
                        $article["image"]=$row["Img"];
                        $article["texte"]=$row["Description"];
                        $article["date"]=$row["Date"];
                        $article["users"]=$row["ConcernedUser"];

                    return $article;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE article SET Title=:title, Img=:image,Description=:texte,Date=:date,ConcernedUser=:users WHERE ID_article=:id";
            $statement = $pdo->prepare($sql);
    
            $id= $_POST["id"];
            $title= $_POST["titre"];
            $image= $_POST["image"];
            $texte= $_POST["texte"];
            $date=$_POST["date"];
            $users= $_POST["users"];
    
            $statement->bindValue(":id", $id);
            $statement->bindValue(":title", $title);
            $statement->bindValue(":image", $image);
            $statement->bindValue(":texte", $texte);
            $statement->bindValue(":date", $date);
            $statement->bindValue(":users", $users);
             
            $updated = $statement->execute();
             
            if($updated){
             echo "<script type= 'text/javascript'>alert('Article modifié');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('L'article  n'a pas été modifié);</script>";
            }
            return $updated;
          }

}

}
?>