<?php 
class GestionUtilisateursModel{
    
 public function __construct()
 {}

public function getAllUtilisateurs()
{   
         require_once "config/config.php";
            $sql = "SELECT * FROM utilisateur";
           
            if($stmt = $pdo->prepare($sql)){
                $utilisateur=[
                    'username'=>'',
                    'password'=>'',
                    'id'=>'',
                    'type'=>'',
                    'nom'=>'',
                    'prenom'=>'',
                    'email'=>'',
                    'phone1'=>'',
                    'phone2'=>'',
                    'phone3'=>'',
                    'adresse'=>'',
                    'classe'=>'',
                    
                ];
                $data=array();
                if($stmt->execute()){
                    $data= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $utilisateur["type"]=$row["Type"];
                        $utilisateur["id"]=$row["ID_user"];
                        $utilisateur["username"]=$row["Username"];
                        $utilisateur["password"]=$row["Password"];

                        //Récupérer les utilisateurs un par un

                        $user=$this->getUtilisateur($utilisateur["id"],$utilisateur["type"]);
                        $utilisateur["nom"]=$user["nom"];
                        $utilisateur["prenom"]=$user["prenom"];
                        $utilisateur["email"]=$user["email"];
                        $utilisateur["phone1"]=$user["phone1"];
                        $utilisateur["phone2"]=$user["phone2"];
                        $utilisateur["phone3"]=$user["phone3"];
                        $utilisateur["adresse"]=$user["adresse"];
                        $utilisateur["classe"]=$user["classe"];
                        array_push($data,$utilisateur);
                    }
                    return $data;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function getUtilisateur($id,$type)
{   
    
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=projet_web", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exc){
        die("ERROR: Could not connect. " . $exc->getMessage());
    }

    
        if($type=="Admin"){

            $query = "SELECT * FROM admin WHERE ID_User= :id";
        }
        elseif($type=="Etudiant"){

            $query = "SELECT * FROM etudiant WHERE ID_User= :id";
        }elseif($type=="Enseignant"){
 
            $query = "SELECT * FROM enseignant WHERE ID_User= :id";

        }else{
            $query = "SELECT * FROM parent WHERE ID_User= :id";

        }

        if($stmt_user = $pdo->prepare($query)){

                $stmt_user->bindParam(":id", $param_user, PDO::PARAM_STR);
        
                $param_user = $id;
                $utilisateur=[
                    'nom'=>'',
                    'prenom'=>'',
                    'email'=>'',
                    'phone1'=>'',
                    'phone2'=>'',
                    'phone3'=>'',
                    'adresse'=>'',
                    'classe'=>'',
                ];
                if($stmt_user->execute()){
                   $row = $stmt_user->fetch();

                        $utilisateur["nom"]=$row["FirstName"];
                        $utilisateur["prenom"]=$row["LastName"];
                        $utilisateur["email"]=$row["Email"];
                        $utilisateur["phone1"]=$row["PhoneNum1"];
                        $utilisateur["phone2"]=$row["PhoneNum2"];
                        $utilisateur["phone3"]=$row["PhoneNum3"];
                        $utilisateur["adresse"]=$row["Address"];
                        if($type=="Etudiant"){
                            $utilisateur["classe"]=$row["Class"];
                        }
                    return $utilisateur;
                }
            }    
            unset($stmt);
            unset($pdo); 
}

public function supprimerUtilisateur($id){

    require_once "config/config.php";
    
            $sql = "DELETE FROM `utilisateur` WHERE ID_User=:id";
            
            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":id", $param_user, PDO::PARAM_STR);
        
                $param_user = $id;

                if($stmt->execute()){
                    return "Done";
                }
            }
}
public function listeClasses(){
 

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=projet_web", "root", "");
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

    public function listeParents(){
 

        require_once "config/config.php";
       
            $sql = "SELECT * FROM parent";
           
            if($stmt = $pdo->prepare($sql)){
                $parent=[
                    'id'=>'',
                    'nom'=>'',
                    'prenom'=>'',
                ];
                $data=array();
                if($stmt->execute()){
                    $parents= array(); 
                    for($i=0; $row = $stmt->fetch(); $i++){
                        $parent["id"]=$row["ID_parent"];
                        $parent["nom"]=$row["FirstName"];
                        $parent["prenom"]=$row["LastName"];
                        array_push($parents,$parent);
                    }
                      return $parents;
        
                }
            }
        
        }


public function addUtilisateur(){

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "INSERT INTO `utilisateur` (`Username`, `Password`,`Type`) VALUES (:username, :password,:type)";
            
            $statement = $pdo->prepare($sql);
    
            $username= $_POST["username"];
            $password= $_POST["password"];
            $type= $_POST["type"];

            $statement->bindValue(":username", $username);
            $statement->bindValue(":password", $password);
            $statement->bindValue(":type", $type);
        
            $inserted = $statement->execute();
             
            if($inserted){

                $id_user=$pdo->lastInsertId();

                if($type=="Admin"){

                    $query ="INSERT INTO `admin` (`FirstName`, `LastName`,`Address`,`PhoneNum1`,`PhoneNum2`,`PhoneNum3`,`Email`,`ID_user`) VALUES (:nom, :prenom,:adresse,:phone1,:phone2,:phone3,:email,:id_user)";
                }
                elseif($type=="Etudiant"){
                    $query ="INSERT INTO `etudiant` (`FirstName`, `LastName`,`Email`,`PhoneNum1`,`PhoneNum2`,`PhoneNum3`,`BirthDate`,`BirthPlace`,`Address`,`Class`,`ID_parent`,`ID_user`) VALUES (:nom,:prenom,:email,:phone1,:phone2,:phone3,:birthdate,:birthplace,:adresse,:id_classe,:id_parent,:id_user)";
                    
                   
                }elseif($type=="Enseignant"){
                    $query ="INSERT INTO `enseignant` (`FirstName`, `LastName`,`Email`,`PhoneNum1`,`PhoneNum2`,`PhoneNum3`,`Address`,`ID_user`) VALUES (:nom,:prenom,:email,:phone1,:phone2,:phone3,:adresse,:id_user)";
        
                }else{
                    $query ="INSERT INTO `parent` (`FirstName`, `LastName`,`Email`,`PhoneNum1`,`PhoneNum2`,`PhoneNum3`,`Address`,`ID_user`) VALUES (:nom, :prenom,:email,:phone1,:phone2,:phone3,:adresse,:id_user)";
                    
                }
            
                $statement = $pdo->prepare($query);
        
                $nom= $_POST["nom"];
                $prenom= $_POST["prenom"];
                $email= $_POST["email"];
                $phone1= $_POST["phone1"];
                $phone2= $_POST["phone2"];
                $phone3= $_POST["phone3"];
                $adresse= $_POST["adresse"];
              
                $statement->bindValue(":nom", $nom);
                $statement->bindValue(":prenom", $prenom);
                $statement->bindValue(":email", $email);
                $statement->bindValue(":phone1", $phone1);
                $statement->bindValue(":phone2", $phone2);
                $statement->bindValue(":phone3", $phone3);
                $statement->bindValue(":adresse", $adresse);
                $statement->bindValue(":id_user", $id_user);


                if ($type=="Etudiant"){
                
                    $birthdate= $_POST["datenaissance"];
                    $birthplace= $_POST["placenaissance"];
                    $id_classe= $_POST["classe"];
                    $id_parent= $_POST["parent"];

                    $statement->bindValue(":birthdate", $birthdate);
                    $statement->bindValue(":birthplace", $birthplace);
                    $statement->bindValue(":id_classe", $id_classe);
                    $statement->bindValue(":id_parent", $id_parent);

                }
                $inserted_user = $statement->execute();
            
                if ($inserted_user){
             echo "<script type= 'text/javascript'>alert('Nouveel utilisaeur inséré');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('L'utilisateur n'a pas été inséré);</script>";
            }
            return $inserted_user;
          }

        }


}
public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE utilisateur SET Username=:username, Password=:password WHERE ID_user=:id";
            $statement = $pdo->prepare($sql);
    
            $id= $_POST["id"];
            $username= $_POST["username"];
            $password= $_POST["password"];
            $type= $_POST["type"];

            $statement->bindValue(":username", $username);
            $statement->bindValue(":password", $password);
            $statement->bindValue(":id", $id);
           
            $updated = $statement->execute();
             
            if($updated){

                if($type=="Admin"){

                    $sql = "UPDATE admin SET FirstName=:nom, LastName=:prenom,Email=:email,Address=:adresse,PhoneNum1=:phone1,PhoneNum2=:phone2,PhoneNum3=:phone3 WHERE ID_user=:id";
            
                }
                elseif($type=="Etudiant"){
                    
                    $sql = "UPDATE admin SET FirstName=:nom, LastName=:prenom,Email=:email,Address=:adresse,PhoneNum1=:phone1,PhoneNum2=:phone2,PhoneNum3=:phone3 WHERE ID_user=:id";
                    
                }elseif($type=="Enseignant"){
         
                    $sql = "UPDATE enseignant SET FirstName=:nom, LastName=:prenom,Email=:email,Address=:adresse,PhoneNum1=:phone1,PhoneNum2=:phone2,PhoneNum3=:phone3 WHERE ID_user=:id";
                    
        
                }else{
                    $sql = "UPDATE parent SET FirstName=:nom, LastName=:prenom,Email=:email,Address=:adresse,PhoneNum1=:phone1,PhoneNum2=:phone2,PhoneNum3=:phone3 WHERE ID_user=:id";
                }

                $statement = $pdo->prepare($sql);
    
                $nom= $_POST["nom"];
                $prenom= $_POST["prenom"];
                $phone1= $_POST["phone1"];
                $phone2= $_POST["phone2"];
                $phone3= $_POST["phone3"];
                $email= $_POST["email"];
                $adresse= $_POST["adresse"];
    
                $statement->bindValue(":nom", $nom);
                $statement->bindValue(":prenom", $prenom);
                $statement->bindValue(":email", $email);
                $statement->bindValue(":phone1", $phone1);
                $statement->bindValue(":phone2", $phone2);
                $statement->bindValue(":phone3", $phone3);
                $statement->bindValue(":adresse", $adresse);
                $statement->bindValue(":id", $id);
                /*  
               if ($type=="Etudiant"){
                    $classe= $_POST["classe"];
                    $statement->bindValue(":classe", $classe);

                } */
            $user_updated = $statement->execute();
            if ($user_updated){
             echo "<script type= 'text/javascript'>alert('Utilisateur modifié');</script>";
             
            }
            else{
            echo "<script type= 'text/javascript'>alert('L'utilisateur  n'a pas été modifié);</script>";
            }
        }
            return $user_updated;
          }

}

}
?>