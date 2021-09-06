<?php 
class GestionDiaporamaModel{

    
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

public function modifierInBDD(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";

        for($i=1;$i<=4;$i++){
           $lien_image= $_POST["lien". $i];
            $id= $_POST["id".$i];
            echo $id;
            
            $sql = "UPDATE diaporama SET lien=:lien WHERE ID_image=:id_image";
            $statement = $pdo->prepare($sql);
    
            $statement->bindValue(":lien", $lien_image);
            $statement->bindValue(":id_image", $id);

            $updated = $statement->execute();
        
        }
            if($updated){
             echo "<script type= 'text/javascript'>alert('Nouveau paragraphe inséré');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le paragraphe  n'a pas été inséré);</script>";
            }
            return $updated;
        }  

}

}
?>