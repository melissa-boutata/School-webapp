<?php

class ProfilEnseignantModel {

 public function __construct()
 {}

public function getInfos()
{ 

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=tdw", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }
      
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       
        // Récuperer les infos de la BDD 
        if ($_SESSION["type"] = "Enseignant"){
            $sql = "SELECT ID_ens,FirstName,LastName,Email,PhoneNum1,PhoneNum2,PhoneNum3,Address FROM enseignant WHERE ID_user = :id_user";
       
            if($stmt = $pdo->prepare($sql)){
               
                $stmt->bindParam(":id_user", $param_id, PDO::PARAM_STR);
                $param_id = $_SESSION["id"];
               
                if($stmt->execute()){
                    $data[]=null;
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $data[0] = $row["ID_ens"];
                            $data[1]=$_SESSION["username"];
                            $data[2]=$row["FirstName"];
                            $data[3]=$row["LastName"];
                            $data[4]=$row["Email"];
                            $data[5]=$row["PhoneNum1"];
                            $data[6]=$row["PhoneNum2"];
                            $data[7]=$row["PhoneNum3"];
                            $data[8]=$row["Address"];

                            /*Récupérer les ID des enfants de la table etudiant

                            $enfants=$this->getEnfant($data[0]);
                            foreach($enfants as $enfant)
                            {
                                array_push($data,$enfant);
                            }*/
            
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
/*
public function getEnfant($id_parent){

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=tdw", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }



        $sql_student = "SELECT ID_student,FirstName,LastName,Email FROM etudiant WHERE ID_parent=:id_parent ";
                        
        if($stmt_student = $pdo->prepare($sql_student)){

            $stmt_student->bindParam(":id_parent", $param_id, PDO::PARAM_STR);

            $param_id = $id_parent;
            $etud=[
                'id_etud'=>'',
                'nom'=>'',
                'prenom'=>'',
                'email'=>'',
            ];
            if($stmt_student->execute()){
                $enfants= array(); 
                for($i=0; $row = $stmt_student->fetch(); $i++){
                    $etud["id_etud"]=$row["ID_student"];
                    $etud["nom"]=$row["FirstName"];
                    $etud["prenom"]=$row["LastName"];
                    $etud["email"]=$row["Email"];
                    array_push($enfants,$etud);

                }
                return $enfants;
            }
        }
}*/

}
?>

           
         
    
          