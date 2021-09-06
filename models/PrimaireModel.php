<?php

class PrimaireModel {

 public function __construct()
 {}

public function getPrimaireArticles()
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
            $sql = "SELECT * FROM article WHERE Primaire='Oui' ORDER BY Date DESC";
            
            if($stmt = $pdo->prepare($sql)){
                $description=[
                    'id'=>'',
                    'titre'=>'',
                    'image'=>'',
                    'description'=>'',
                    'data'=>''
                ];
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $description["id"]=$row["ID_article"];
                        $description["titre"]=$row["Title"];
                        $description["image"]=$row["Img"];
                        $description["description"]=$row["Description"];
                        $description["date"]=$row["Date"];
                        array_push($data,$description);
                    }
                    return $data;
                   
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function getEnsPrimaire(){

    require_once "config/config.php";
    $sql = "SELECT DISTINCT ID_ens FROM enseignement INNER JOIN classe ON enseignement.ID_classe=classe.ID_classe WHERE Cycle='Primaire'";
    $query = "SELECT  ID_ens,FirstName,LastName,Email,HeureReception1,HeureReception2,Jour1,Jour2 FROM enseignant WHERE ID_ens=:id_ens";
  
    if($stmt = $pdo->prepare($sql)){
        $ens=[
            'id'=>'',
            'nom'=>'',
            'prenom'=>'',
            'email'=>'',
            'heure1'=>'',
            'heure2'=>'',
            'jour1'=>'',
            'jour2'=>'',
        ];
      
        if($stmt->execute()){
            $data= array(); 
            for($i=0; $row = $stmt->fetch(); $i++){
                $id_ens=$row["ID_ens"];
    
                    if($result = $pdo->prepare($query)){
                        $result->bindValue(":id_ens", $id_ens);
                        if($result->execute()){
                            
                            for($j=0; $res = $result->fetch(); $j++){
                        
                                $ens["nom"]=$res["FirstName"];
                                $ens["prenom"]=$res["LastName"];
                                $ens["email"]=$res["Email"];
                                $ens["heure1"]=$res["HeureReception1"];
                                $ens["heure2"]=$res["HeureReception2"];
                                $ens["jour1"]=$res["Jour1"];
                                $ens["jour2"]=$res["Jour2"];            
                                array_push($data,$ens);
                            }
                        }
                    }
               
            }
            return $data;
        }
    }    
    unset($stmt);
    unset($pdo); 

}



public function getClasses($cycle){
    {   
    require_once "config/config.php";
  
             $sql = "SELECT * FROM classe WHERE Cycle=:cycle ";
                
                if($stmt = $pdo->prepare($sql)){
    
                    $stmt->bindParam(":cycle", $param_cycle, PDO::PARAM_STR);
            
                    $param_cycle = $cycle;
                    $classe=[
                        'id_classe'=>'',
                        'nom_classe'=>''
                    ];
                    if($stmt->execute()){
                        $classes= array(); 
                        for($i=0; $row = $stmt->fetch(); $i++){
                            //Vérifier si cette classe a un edt dans la bdd 
                            $select = $pdo->prepare('SELECT ID_classe FROM seance WHERE ID_classe = ?');
                            $select->execute([$row["ID_classe"]]);
                            if ($select->rowCount() > 0) {
                                $classe["id_classe"]=$row["ID_classe"];
                                $classe["nom_classe"]=$row["Class"];
                              
                                array_push($classes,$classe);
                            } 
                        }
                        return $classes;
                    }
                }    
                unset($stmt);
                unset($pdo); 
    }
    
}

public function getEdtByDay($id_classe,$jour){


    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }

        //require_once "config/config.php";
        $sql = "SELECT * FROM seance WHERE ID_classe=:id_classe && Jour=:jour";
        
        if($stmt = $pdo->prepare($sql)){

            $stmt->bindParam(":id_classe", $param_id, PDO::PARAM_STR);
            $stmt->bindParam(":jour", $param_jour, PDO::PARAM_STR);
            
            $param_id = $id_classe;
            $param_jour= $jour;
            $seance=[
                'id_ens'=>'',
                'nom_ens'=>'',
                'prenom_ens'=>'',
                'id_matiere'=>'',
                'nom_matiere'=>'',
                'jour'=>'',
                'heureD'=>'',
                'heureF'=>'',
                'salle'=>'',            
            ];
            $data=array();
            if($stmt->execute()){
                $data= array(); 
                for($i=0; $row = $stmt->fetch(); $i++){
                    $seance["id_ens"]=$row["ID_ens"];
                    $seance["id_matiere"]=$row["ID_matiere"];
                    $seance["jour"]=$row["Jour"];
                    $seance["heureD"]=$row["HeureD"];
                    $seance["heureF"]=$row["HeureF"];
                    $seance["salle"]=$row["Salle"];
                    //Récupérer les noms des matièrs et des enseignants un par un

                    $query_ens = "SELECT FirstName,LastName FROM enseignant WHERE ID_ens= :id";
                        if($stmt_ens = $pdo->prepare($query_ens)){
        
                                $stmt_ens->bindParam(":id", $param_ens, PDO::PARAM_STR);
                                $param_ens = $seance["id_ens"];
                                if($stmt_ens->execute()){
                                $row = $stmt_ens->fetch();

                                        $seance["nom_ens"]=$row["FirstName"];
                                        $seance["prenom_ens"]=$row["LastName"];
                                        $seance["prenom_ens"];
                                }
                            }

                        $query_mat = "SELECT LibMatiere FROM matiere WHERE ID_matiere= :id";
                        if($stmt_mat = $pdo->prepare($query_mat)){
        
                                $stmt_mat->bindParam(":id", $param_mat, PDO::PARAM_STR);
                                $param_mat = $seance["id_matiere"];
                                if($stmt_mat->execute()){
                                $row = $stmt_mat->fetch();
                
                                        $seance["nom_matiere"]=$row["LibMatiere"];
                                     
                                }
                            }
                          
                    array_push($data,$seance);
                }
                return $data;
            }
        }    
        unset($stmt);
        unset($pdo); 
}


}
?>
   
    
          