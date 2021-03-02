<?php

class EspaceParentModel {
public function getCadres()
{
    require_once "config/config.php";
     // Get all students cadres
      
     $sql = "SELECT `ID_cadre`,`Title`, `Contenu`,`Date`  FROM `cadre` WHERE Tous=:tous OR  Parents=:parents";
    
     if($stmt = $pdo->prepare($sql)){

        $stmt->bindParam(":tous", $param_tous, PDO::PARAM_STR);
        $stmt->bindParam(":parents", $param_primaire, PDO::PARAM_STR);
 
        $param_tous = "Oui";
        $param_parents = "Oui";
     
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
 