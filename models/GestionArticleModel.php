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
                    'tous'=>'',
                    'ens'=>'',
                    'parents'=>'',
                    'primaire'=>'',
                    'moyen'=>'',
                    'secondaire'=>'',
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
                        $article["tous"]=$row["Tous"];
                        $article["ens"]=$row["Enseignants"];
                        $article["parents"]=$row["Parents"];
                        $article["primaire"]=$row["Primaire"];
                        $article["moyen"]=$row["Moyen"];
                        $article["secondaire"]=$row["Secondaire"];
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
    
            $sql = "INSERT INTO `article` (`Title`, `Img`,`Description`,`Date`,`Tous`,`Parents`,`Enseignants`,`Primaire`,`Moyen`,`Secondaire`) VALUES (:title, :image,:texte,:date,:tous,:parents,:enseignants,:primaire,:moyen,:secondaire)";
            
            $statement = $pdo->prepare($sql);
    
            $title= $_POST["titre"];
            $image= $_POST["image"];
            $texte= $_POST["texte"];
            $date=$_POST["date"];
         
            if (!empty($_POST['Tous'])){
                $tous='Oui';
            }else{
                $tous='Non';
            }
            if (!empty($_POST['Parents'])){
                $parents='Oui';
            }else{
                $parents='Non';
            }
            if (!empty($_POST['Enseignants'])){
                $enseignants='Oui';
            }else{
                $enseignants='Non';
            }
            if (!empty($_POST['Primaire'])){
                $primaire='Oui';
            }else{
                $primaire='Non';
            }
            if (!empty($_POST['Moyen'])){
                $moyen='Oui';
            }else{
                $moyen='Non';
            }
            if (!empty($_POST['Secondaire'])){
                $secondaire='Oui';
            }else{
                $secondaire='Non';
            }

            $statement->bindValue(":title", $title);
            $statement->bindValue(":image", $image);
            $statement->bindValue(":texte", $texte);
            $statement->bindValue(":date", $date);
            $statement->bindValue(":tous", $tous);
            $statement->bindValue(":parents", $parents);
            $statement->bindValue(":enseignants", $enseignants);
            $statement->bindValue(":primaire", $primaire);
            $statement->bindValue(":moyen", $moyen);
            $statement->bindValue(":secondaire", $secondaire);
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
                    'tous'=>'',
                    'ens'=>'',
                    'parents'=>'',
                    'primaire'=>'',
                    'moyen'=>'',
                    'secondaire'=>'',
                ];
                if($stmt->execute()){
                   $row = $stmt->fetch();
                        $article["id"]=$row["ID_article"];
                        $article["titre"]=$row["Title"];
                        $article["image"]=$row["Img"];
                        $article["texte"]=$row["Description"];
                        $article["date"]=$row["Date"];
                        $article["tous"]=$row["Tous"];
                        $article["ens"]=$row["Enseignants"];
                        $article["parents"]=$row["Parents"];
                        $article["primaire"]=$row["Primaire"];
                        $article["moyen"]=$row["Moyen"];
                        $article["secondaire"]=$row["Secondaire"];

                    return $article;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE article SET Title=:title, Img=:image,Description=:texte,Date=:date,Tous=:tous,Parents=:parents,Enseignants=:enseignants,Primaire=:primaire,Moyen=:moyen,Secondaire=:secondaire WHERE ID_article=:id";
            $statement = $pdo->prepare($sql);
    
            $id= $_POST["id"];
            $title= $_POST["titre"];
            $image= $_POST["image"];
            $texte= $_POST["texte"];
            $date=$_POST["date"];
            if (!empty($_POST['Tous'])){
                $tous='Oui';
            }else{
                $tous='Non';
            }
            if (!empty($_POST['Parents'])){
                $parents='Oui';
            }else{
                $parents='Non';
            }
            if (!empty($_POST['Enseignants'])){
                $enseignants='Oui';
            }else{
                $enseignants='Non';
            }
            if (!empty($_POST['Primaire'])){
                $primaire='Oui';
            }else{
                $primaire='Non';
            }
            if (!empty($_POST['Moyen'])){
                $moyen='Oui';
            }else{
                $moyen='Non';
            }
            if (!empty($_POST['Secondaire'])){
                $secondaire='Oui';
            }else{
                $secondaire='Non';
            }
    
            $statement->bindValue(":id", $id);
            $statement->bindValue(":title", $title);
            $statement->bindValue(":image", $image);
            $statement->bindValue(":texte", $texte);
            $statement->bindValue(":date", $date);
            $statement->bindValue(":tous", $tous);
            $statement->bindValue(":parents", $parents);
            $statement->bindValue(":enseignants", $enseignants);
            $statement->bindValue(":primaire", $primaire);
            $statement->bindValue(":moyen", $moyen);
            $statement->bindValue(":secondaire", $secondaire);
             
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