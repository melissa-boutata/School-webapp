<?php 
class GestionPresentationModel{
    
 public function __construct()
 {}

public function getAllParagraphes()
{   
         require_once "config/config.php";
            $sql = "SELECT * FROM description_ecole";
           
            if($stmt = $pdo->prepare($sql)){
                $article=[
                    'id'=>'',
                    'contenu'=>'',
                    'image'=>'',
                ];
                $data=array();
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $paragraphe["id"]=$row["ID_description"];
                        $paragraphe["contenu"]=$row["Contenu"];
                        $paragraphe["image"]=$row["Img"];
                        array_push($data,$paragraphe);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function addParagraphe(){

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "INSERT INTO `description_ecole` (`Contenu`, `Img`) VALUES (:contenu, :image)";
            
            $statement = $pdo->prepare($sql);
    
            $contenu= $_POST["contenu"];
            $image= $_POST["image"];
           
    
            $statement->bindValue(":contenu", $contenu);
            $statement->bindValue(":image", $image);
            $inserted = $statement->execute();
             
            if($inserted){
             echo "<script type= 'text/javascript'>alert('Nouveau paragraphe inséré');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le paragraphe  n'a pas été inséré);</script>";
            }
            return $inserted;
          }


}
          
public function supprimerPresentation($id){

    require_once "config/config.php";
    
            $sql = "DELETE FROM `description_ecole` WHERE ID_description=:id";
            
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_article, PDO::PARAM_STR);
        
                $param_article = $id;

                if($stmt->execute()){
                    return "Done";
                }
            }
}

public function getParagraphe($id)
{   
    
    require_once "config/config.php";
            $sql = "SELECT * FROM description_ecole WHERE ID_description= :id";
           
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_article, PDO::PARAM_STR);
        
                $param_article = $id;

                $article=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                ];
                if($stmt->execute()){
                   $row = $stmt->fetch();
                        $paragraphe["id"]=$row["ID_description"];
                        $paragraphe["contenu"]=$row["Contenu"];
                        $paragraphe["image"]=$row["Img"];

                    return $paragraphe;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE description_ecole SET Contenu=:contenu, Img=:image WHERE ID_description=:id";
            $statement = $pdo->prepare($sql);
    
            $id= $_POST["id"];
            $contenu= $_POST["contenu"];
            $image= $_POST["image"];
           
            
            $statement->bindValue(":id", $id);
            $statement->bindValue(":contenu", $contenu);
            $statement->bindValue(":image", $image);
         
             
            $updated = $statement->execute();
             
            if($updated){
             echo "<script type= 'text/javascript'>alert('Paragraphe modifié');</script>";
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le paragraphe n'a pas été modifié);</script>";
            }
            return $updated;
          }

}

}
?>