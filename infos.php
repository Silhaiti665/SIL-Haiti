<?php 
$connexion= new mysqli("mysql-silhaiti.alwaysdata.net","silhaiti_","Blanchard711","silhaiti_membres");
$nom=htmlspecialchars($_POST['nom']);
$email=htmlspecialchars($_POST['email']);
$phone=htmlspecialchars($_POST['phone']);
$adress=htmlspecialchars($_POST['adress']);
$montant=htmlspecialchars($_POST['montant']);

$sql="INSERT INTO infos(nom,email,phone,adress,montant)VALUES('$nom','$email','$phone','$adress','$montant')";
$result=mysqli_query($connexion,$sql);
if($result=="true"){
   echo " reket ou a ale tann administrate a fe ou repons";
  }
  else{
    echo "enfomasyon yo pa ale tanpri reyeseye";
	}