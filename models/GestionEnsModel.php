<?php 
class GestionEnsModel{
    
 public function __construct()
 {}

public function getAllEns()
{   
         require_once "config/config.php";
            $sql = "SELECT ID_ens,FirstName,LastName,Email,HeureReception1,HeureReception2,Jour1,Jour2 FROM enseignant";
            $query = "SELECT Class FROM enseignement INNER JOIN classe ON enseignement.ID_classe=classe.ID_classe WHERE ID_ens=:id_ens";
          
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
                    'classes'=>'',
                ];
              
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $ens["id"]=$row["ID_ens"];
            
                            if($result = $pdo->prepare($query)){
                                $result->bindValue(":id_ens", $ens["id"]);
                                if($result->execute()){
                                    $classes=[]; 
                                    for($j=0; $res = $result->fetch(); $j++){
                                        $classes[$j]=$res["Class"];
                                    }
                                }
                            }
                        $ens["nom"]=$row["FirstName"];
                        $ens["prenom"]=$row["LastName"];
                        $ens["email"]=$row["Email"];
                        $ens["heure1"]=$row["HeureReception1"];
                        $ens["heure2"]=$row["HeureReception2"];
                        $ens["jour1"]=$row["Jour1"];
                        $ens["jour2"]=$row["Jour2"];
                        $ens["classes"]=$classes;
                        
                        array_push($data,$ens);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function getEns($id)
{   
    
    require_once "config/config.php";
            $sql = "SELECT * FROM enseignant WHERE ID_ens= :id";
           
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
        
                $param_id = $id;

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
                   $row = $stmt->fetch();
                    $ens["id"]=$row["ID_ens"];
                    $ens["nom"]=$row["FirstName"];
                    $ens["prenom"]=$row["LastName"];
                    $ens["email"]=$row["Email"];
                    $ens["heure1"]=$row["HeureReception1"];
                    $ens["heure2"]=$row["HeureReception2"];
                    $ens["jour1"]=$row["Jour1"];
                    $ens["jour2"]=$row["Jour2"];
                 
                    return $ens;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE enseignant SET Jour1=:jour1,Jour2=:jour2,HeureReception1=:heure1,HeureReception2=:heure2 WHERE ID_ens=:id";
            $statement = $pdo->prepare($sql);
    
            $id= $_POST["id"];
            $jour1= $_POST["jour1"];
            $jour2= $_POST["jour2"];
            $heure1= $_POST["heure1"];
            $heure2= $_POST["heure2"];
        
    
            $statement->bindValue(":id", $id);
            $statement->bindValue(":heure1", $heure1);
            $statement->bindValue(":heure2", $heure2);
            $statement->bindValue(":jour1", $jour1);
            $statement->bindValue(":jour2", $jour2);
             
            $updated = $statement->execute();
             
            if($updated){
             echo "<script type= 'text/javascript'>alert('Dates et/ou heures de réception modifiées');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('Dates et/ou heures de réception non modifiées');</script>";
            }
            return $id;
            
          }

}

public function ajouterClasseInBDD(){

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";

            $id_ens= $_POST["id_ens"];
            $classe= $_POST["classe"];
            $nbheure= $_POST["nbheure"];

            // To get the id of the class from the class table
            $query = "SELECT ID_classe FROM classe WHERE Class= :classe";
           
            if($result = $pdo->prepare($query)){

                $result->bindParam(":classe", $param_classe, PDO::PARAM_STR);
        
                $param_classe = $classe;
                if($result->execute()){
                   $row = $result->fetch();
                    $id_classe=$row["ID_classe"];
                }
            }
    
            $sql = "INSERT INTO `enseignement` (`ID_ens`, `ID_classe`,`HeureTravail`) VALUES (:id_ens, :id_classe,:nbheure)";
            
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id_ens", $id_ens);
            $statement->bindValue(":id_classe", $id_classe);
            $statement->bindValue(":nbheure", $nbheure);

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

}
?>