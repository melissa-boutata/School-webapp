<?php

class EspaceEtudModel {
public function getCadres()
{
    require_once "config/config.php";
     // Get all students cadres
      
     $sql = "SELECT `ID_cadre`,`Title`, `Contenu`,`Date`  FROM `cadre` WHERE Tous=:tous OR  Primaire=:primaire OR Moyen=:moyen OR Secondaire=:secondaire";
    
     if($stmt = $pdo->prepare($sql)){

        $stmt->bindParam(":tous", $param_tous, PDO::PARAM_STR);
        $stmt->bindParam(":primaire", $param_primaire, PDO::PARAM_STR);
        $stmt->bindParam(":moyen", $param_moyen, PDO::PARAM_STR);
        $stmt->bindParam(":secondaire", $param_secondaire, PDO::PARAM_STR);
 
        $param_tous = "Oui";
        $param_primaire = "Oui";
        $param_moyen = "Oui";
        $param_secondaire = "Oui";

        $cadre=[
            'id'=>'',
            'titre'=>'',
            'contenu'=>'',
            'date'=>'',
        ];
        $data=array();
        if($stmt->execute()){
            $data= array(); 
            for($i=0; $row = $stmt->fetch(); $i++){
                $cadre["id"]=$row["ID_cadre"];
                $cadre["titre"]=$row["Title"];
                $cadre["contenu"]=$row["Contenu"];   
                $cadre["date"]=$row["Date"];             
                array_push($data,$cadre);
            }
            return $data;
        }
    }    
    unset($stmt);
    unset($pdo); 
}
}
?>
 