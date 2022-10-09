<?php 
$connexion= new mysqli("mysql-silhaiti.alwaysdata.net","silhaiti_","Blanchard711","silhaiti_membres");
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$mail=htmlspecialchars($_POST['email']);
$mdp=sha1($_POST['password']);

$sql="INSERT INTO users(nom,prenom,email,password)VALUES('$nom','$prenom','$mail','$mdp')";
$result=mysqli_query($connexion,$sql);
if($result=="true"){
  header('Location: '.$uri.'/SIL Haiti/connexion/');
  }
  else{
    echo "impossible d'inscrire ";
	}