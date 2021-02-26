<?php

class EspaceEtudModel {
public function getInfos()
{
    require_once "config/config.php";
     // Get all students artciles 
     $sql = "SELECT Title,Img,Description FROM article WHERE ConcernedUser == 'student' ";

     if($stmt = $pdo->prepare($sql)){
    
        if($stmt->execute()){

            if($stmt->rowCount() !=0 ){
                //Foreach ...
                /*if($row = $stmt->fetch()){
                    $id = $row[$type_id];
                $username = $row["Username"];*/ }
            }
}
}
}
?>
 