<?php 
class ContactModel{
    
 public function __construct()
 {}
public function getContact(){
    require_once "config/config.php";
            $sql = "SELECT * FROM contact";
           
            if($stmt = $pdo->prepare($sql)){
                $contact=[
                    'nom'=>'',
                    'adresse'=>'',
                    'phone1'=>'',
                    'phone2'=>'',
                    'phone3'=>'',
                    'fixe'=>'',
                    'fax'=>'',
                    'email'=>'',
                ];
                $data=array();
                if($stmt->execute()){
                    $row = $stmt->fetch();
                        $contact["nom"]=$row["Name"];
                        $contact["adresse"]=$row["Location"];
                        $contact["phone1"]=$row["PhoneNum1"];
                        $contact["phone2"]=$row["PhoneNum2"];
                        $contact["phone3"]=$row["PhoneNum3"];
                        $contact["fixe"]=$row["FixeNumber"];
                        $contact["fax"]=$row["FaxeNumber"];
                        $contact["email"]=$row["Email"];

                    return $contact;
                }
            }    
            unset($stmt);
            unset($pdo); 

}  
public function modifierInBDD(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        require_once "config/config.php";
    
            $sql = "UPDATE contact SET Name=:nom,Location=:adresse,PhoneNum1=:phone1,PhoneNum2=:phone2,PhoneNum3=:phone3,FixeNumber=:fixe,FaxeNumber=:fax,Email=:email  WHERE ID_contact=1";
            $statement = $pdo->prepare($sql);
    
            $nom= $_POST["nom"];
            $adresse= $_POST["adresse"];
            $phone1= $_POST["phone1"];
            $phone2= $_POST["phone2"];
            $phone3= $_POST["phone3"];
            $fixe= $_POST["fixe"];
            $fax=$_POST["fax"];
            $email=$_POST["email"];

         
            $statement->bindValue(":nom", $nom);
            $statement->bindValue(":adresse", $adresse);
            $statement->bindValue(":phone1", $phone1);
            $statement->bindValue(":phone2", $phone2);
            $statement->bindValue(":phone3", $phone3);
            $statement->bindValue(":fixe", $fixe);
            $statement->bindValue(":fax", $fax);
            $statement->bindValue(":email", $email);

            $updated = $statement->execute();
             
            if($updated){
             echo "<script type= 'text/javascript'>alert('Paragraphe modifié');</script>";
            }
            else{
            echo "<script type= 'text/javascript'>alert('Le paragraphe n'a pas été modifié);</script>";
            }
            return $updated;
          }

}

}
?>