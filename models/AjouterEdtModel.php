<?php 

class AjouterEdtModel{
    
 public function __construct()
 {}

public function listeEns(){

    require_once "config/config.php";
    $sql = "SELECT * FROM enseignant";
   
    if($stmt = $pdo->prepare($sql)){
        $ens=[
            'id'=>'',
            'firstName'=>'',
            'lastName'=>'',
        ];
        $data=array();
        if($stmt->execute()){
            $data= array(); 
            for($i=0; $row = $stmt->fetch(); $i++){
                $ens["id"]=$row["ID_ens"];
                $ens["firstName"]=$row["FirstName"];
                $ens["lastName"]=$row["LastName"];
                array_push($data,$ens);
            }
            return $data;
        }
    }
}
public function listeClasse(){
 

try{
    $pdo = new PDO("mysql:host=localhost;dbname=tdw", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exc){
    die("ERROR: Could not connect. " . $exc->getMessage());
}

    $sql = "SELECT * FROM classe";
   
    if($stmt = $pdo->prepare($sql)){
        $ens=[
            'id'=>'',
            'nom'=>'',
        ];
        $data=array();
        if($stmt->execute()){
            $classes= array(); 
            for($i=0; $row = $stmt->fetch(); $i++){
                $classe["id"]=$row["ID_classe"];
                $classe["nom"]=$row["Class"];
                array_push($classes,$classe);
            }
              return $classes;

        }
    }

}
public function listeMatiere(){
 
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=tdw", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }
    
        $sql = "SELECT * FROM matiere";
       
        if($stmt = $pdo->prepare($sql)){
            $mat=[
                'id'=>'',
                'nom_matiere'=>'',
            ];
            if($stmt->execute()){
                $matieres= array(); 
                for($i=0; $row = $stmt->fetch(); $i++){
                    $mat["id"]=$row["ID_matiere"];
                    $mat["nom_matiere"]=$row["LibMatiere"];
                    array_push($matieres,$mat);
                }
                  return $matieres;
    
            }
        }
    
    }
    

public function addEdt(){
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";

        for($i=1;$i<=7;$i++){
           $nom_ens= $_POST["ens". $i];

           //Récuper l'id qui correspond à l'ens
            $ens_query = "SELECT ID_ens FROM enseignant WHERE FirstName=:nom_ens";
            if($stmt_ens = $pdo->prepare($ens_query)){

                $stmt_ens->bindParam(":nom_ens", $param_ens, PDO::PARAM_STR);
        
                $param_ens = $nom_ens;

                if($stmt_ens->execute()){
                   $row = $stmt_ens->fetch();
                        $id_ens=$row["ID_ens"];}
                } 
            $mat= $_POST["matiere".$i];
            //Récuper l'id qui correspond à la matiere en entrée
            $mat_query = "SELECT ID_matiere FROM matiere WHERE LibMatiere=:nom_mat";
            if($stmt_mat = $pdo->prepare($mat_query)){

                $stmt_mat->bindParam(":nom_mat", $param_mat, PDO::PARAM_STR);
        
                $param_mat = $mat;

                if($stmt_mat->execute()){
                   $row = $stmt_mat->fetch();
                        $id_mat=$row["ID_matiere"];}
                } 
            //Récuper l'id qui correspond à la classe en entrée
            $classe= $_POST["classe"];
            $classe_query = "SELECT ID_classe FROM classe WHERE Class=:classe";
            if($stmt_classe = $pdo->prepare($classe_query)){

                $stmt_classe->bindParam(":classe", $param_classe, PDO::PARAM_STR);
        
                $param_classe = $classe;

                if($stmt_classe->execute()){
                   $row = $stmt_classe->fetch();
                        $id_classe=$row["ID_classe"];}
                } 
            $jour= $_POST["jour"];
            $heured= $_POST["heureD". $i];
            $heuref= $_POST["heureF". $i];
            $salle=$_POST["salle". $i];
            
            //$inserted= $this->addSeance($id_ens,$id_mat,$id_classe,$jour,$heured,$heuref,$salle);
            

            $sql = "INSERT INTO `seance` ( `ID_ens`, `ID_matiere`, `ID_classe`, `Jour`, `HeureD`, `HeureF`, `Salle`) VALUES (:id_ens,:id_mat,:id_classe,:jour,:heured,:heuref,:salle)";
    
            $statement = $pdo->prepare($sql);
        
            $statement->bindValue(":id_ens", $id_ens);
            $statement->bindValue(":id_mat", $id_mat);
            $statement->bindValue(":id_classe", $id_classe);
            $statement->bindValue(":jour", $jour);
            $statement->bindValue(":heured", $heured);
            $statement->bindValue(":heuref", $heuref);
            $statement->bindValue(":salle", $salle);
            
        
            $inserted = $statement->execute();
        
        }
            if($inserted){
             echo "<script type= 'text/javascript'>alert('Nouveau paragraphe inséré');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le paragraphe  n'a pas été inséré);</script>";
            }
            return $inserted;
        }  

}

public function addClasse(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";

            $cycle=$_POST["cycle"];
            $niveau= $_POST["niveau"];
            $groupe= $_POST["classe"];
            $annee= $_POST["annee"];

            if($cycle=="Primaire"){
                $classe=$niveau . "AP" . $groupe; 
            }
            elseif($cycle=="Moyen"){
                $classe=$niveau . "AM" . $groupe; 
            }
            else{
                $classe=$niveau . "AS" . $groupe; 
            }
               
            $sql = "INSERT INTO `classe` (`Cycle`,`Class`,`SchoolYear`) VALUES (:cycle, :classe,:annee)";
            
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":cycle", $cycle);
            $statement->bindValue(":classe", $classe);
            $statement->bindValue(":annee", $annee);

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