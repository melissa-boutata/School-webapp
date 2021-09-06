<?php 
class GestionRestaurationModel{
    
 public function __construct()
 {}

public function getAllRepas()
{   
         require_once "config/config.php";
            $sql = "SELECT * FROM repas ORDER BY Date DESC";
           
            if($stmt = $pdo->prepare($sql)){
                $repas=[
                    'id'=>'',
                    'date'=>'',
                    'cycle'=>'',
                    'entree'=>'',
                    'plat'=>'',
                    'dessert'=>'',
                ];
                $data=array();
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $repas["id"]=$row["ID_repas"];
                        $repas["date"]=$row["Date"];
                        $repas["cycle"]=$row["Cycle"];
                        $repas["entree"]=$row["Entree"];
                        $repas["plat"]=$row["PlatPrincipal"];
                        $repas["dessert"]=$row["Dessert"];
                        array_push($data,$repas);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function addRepas(){

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "INSERT INTO `repas` (`Date`, `Cycle`, `Entree`, `PlatPrincipal`, `Dessert`) VALUES (:date,:cycle,:entree,:plat,:dessert)";
            
            $statement = $pdo->prepare($sql);
    
            $date= $_POST["date"];
            $cycle= $_POST["cycle"];
            $entree= $_POST["entree"];
            $plat= $_POST["plat"];
            $dessert= $_POST["dessert"];
           
            $statement->bindValue(":date", $date);
            $statement->bindValue(":cycle", $cycle);
            $statement->bindValue(":entree", $entree);
            $statement->bindValue(":plat", $plat);
            $statement->bindValue(":dessert", $dessert);
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
          
public function supprimerRepas($id){

    require_once "config/config.php";
    
            $sql = "DELETE FROM `repas` WHERE ID_repas=:id";
            
            if($stmt = $pdo->prepare($sql)){
                
                $stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
                $param_id = $id;

                if($stmt->execute()){
                    return $id;
                }
            }
}

public function getRepas($id)
{   
    
    require_once "config/config.php";
            $sql = "SELECT * FROM repas WHERE ID_repas=:id";
           
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_id, PDO::PARAM_STR);

                $param_id = $id;

                $repas=[
                    'id'=>'',
                    'date'=>'',
                    'cycle'=>'',
                    'entree'=>'',
                    'plat'=>'',
                    'dessert'=>'',
                ];

                if($stmt->execute()){
                   $row = $stmt->fetch();
                        $repas["id"]=$row["ID_repas"];
                        $repas["date"]=$row["Date"];
                        $repas["cycle"]=$row["Cycle"];
                        $repas["entree"]=$row["Entree"];
                        $repas["plat"]=$row["PlatPrincipal"];
                        $repas["dessert"]=$row["Dessert"];

                    return $repas;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE repas SET Date=:date, Cycle=:cycle, Entree=:entree, PlatPrincipal=:plat, Dessert=:dessert WHERE ID_repas=:id" ;
            $statement = $pdo->prepare($sql);

            $id= $_POST["id"];
            $date= $_POST["date"];
            $cycle= $_POST["cycle"];
            $entree= $_POST["entree"];
            $plat= $_POST["plat"];
            $dessert= $_POST["dessert"];
            
            $statement->bindValue(":id", $id);
            $statement->bindValue(":date", $date);
            $statement->bindValue(":cycle", $cycle);
            $statement->bindValue(":entree", $entree);
            $statement->bindValue(":plat", $plat);
            $statement->bindValue(":dessert", $dessert);
         
             
            $updated = $statement->execute();
             
            if($updated){
             echo "<script type= 'text/javascript'>alert('Repas modifié');</script>";
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le repas n'a pas été modifié);</script>";
            }
            return $cycle;
          }

}
}
?>