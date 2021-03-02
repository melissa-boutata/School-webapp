<?php

class ProfilEnfantModel {

 public function __construct()
 {}

public function getInfos($id)
{ 
       
    require_once "config/config.php";
    
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      
        // Récuperer les infos de la BDD 
        if ($_SESSION["type"] == "Parent"){
            $sql = "SELECT ID_student,FirstName,LastName,Email,PhoneNum1,PhoneNum2,PhoneNum3,BirthDate,BirthPlace,Class,Address FROM etudiant WHERE ID_student = :id_user";

            if($stmt = $pdo->prepare($sql)){
               
                $stmt->bindParam(":id_user", $param_id, PDO::PARAM_STR);
                $param_id = $id;
 
                if($stmt->execute()){
                    $data[]=null;
                    
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){

                            $data[0]=$row["ID_student"];
                            $data[1]=$_SESSION["username"];
                            $data[2]=$row["FirstName"];
                            $data[3]=$row["LastName"];
                            $data[4]=$row["Email"];
                            $data[5]=$row["PhoneNum1"];
                            $data[6]=$row["PhoneNum2"];
                            $data[7]=$row["PhoneNum3"];
                            $data[8]=$row["BirthDate"];
                            $data[9]=$row["BirthPlace"];
                            $data[10]=$row["Address"];
                            $data[11]=$row["Class"];
                            
                            return $data;
                  }
                }
            }    
        }
    }
}
            unset($stmt);
            unset($pdo); 
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

public function getNotes($id_etud){

    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }

        //require_once "config/config.php";
        $sql = "SELECT ID_matiere,Note,Remarque FROM note WHERE ID_etud=:id_etud  ";
        
        if($stmt = $pdo->prepare($sql)){

            $stmt->bindParam(":id_etud", $param_id, PDO::PARAM_STR);
        
            $param_id = $id_etud;

            $note=[
                'matiere'=>'',
                'note'=>'',  
                'remarque'=>'',         
            ];
            $data=array();
            if($stmt->execute()){
                $data= array(); 
                for($i=0; $row = $stmt->fetch(); $i++){
                    $note["note"]=$row["Note"];
                    $note["remarque"]=$row["Remarque"];
                    $id_mat=$row["ID_matiere"];

                    // Récupérer les noms des matières
                         $query_mat = "SELECT LibMatiere FROM matiere WHERE ID_matiere= :id";
                        if($stmt_mat = $pdo->prepare($query_mat)){
        
                                $stmt_mat->bindParam(":id", $param_mat, PDO::PARAM_STR);
                                $param_mat = $id_mat;
                                if($stmt_mat->execute()){
                                $row = $stmt_mat->fetch();
                
                                        $note["matiere"]=$row["LibMatiere"];
                                }
                            }

                            array_push($data,$note);

                        }

          }
                 return $data; 
        }
    }
public function getActivites($id_etud){

    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }

        //require_once "config/config.php";

        $sql = "SELECT Activite1,Activite2,Activite3 FROM activite WHERE ID_etud = :id_etud";

        if($stmt = $pdo->prepare($sql)){
        
            $stmt->bindParam(":id_etud", $param_id, PDO::PARAM_STR);
        
            $param_id = $id_etud;
 
            if($stmt->execute()){

                $activites[]=null;
            
                if($stmt->rowCount() == 1){
            
                    if($row = $stmt->fetch()){
                      $activites[0]=$row["Activite1"];
                      $activites[1]=$row["Activite2"];
                      $activites[2]=$row["Activite3"];
                  
                    }
                }
            }
            return $activites;
        }

}

}
?>

           
         
    
          