<?php

class RestaurationModel {

 public function __construct()
 {}

public function getMenu($cycle)
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
         $sql = "SELECT * FROM repas WHERE Cycle=:cycle ORDER BY Date DESC";
            
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":cycle", $param_cycle, PDO::PARAM_STR);
        
                $param_cycle = $cycle;
                $menu=[
                    'date'=>'',
                    'entree'=>'',
                    'plat'=>'',
                    'dessert'=>'',
                ];
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $menu["date"]=$row["Date"];
                        $menu["entree"]=$row["Entree"];
                        $menu["plat"]=$row["PlatPrincipal"];
                        $menu["dessert"]=$row["Dessert"];
                        array_push($data,$menu);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

}
?>

           
         
    
          