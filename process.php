<?php
session_start();
$connexion= new PDO('mysql:host=mysql-silhaiti.alwaysdata.net;dbname=silhaiti_membres;charset=utf8','silhaiti_','Blanchard711');
if(isset($_POST['envoi']));
  if(!empty($_POST['email']) AND !empty($_POST['password'])){

      $email=htmlspecialchars($_POST['email']);
      $password=sha1($_POST['password']);

       $recuperusers=$connexion->prepare('SELECT email AND password FROM users WHERE email=? AND password=?');
       $recuperusers->execute(array($email,$password));

        if($recuperusers->rowCount() > 0){
			
		     $_SESSION['email']=$email;
		     $_SESSION['password']=$password;
		     
		     header('Location: '.$uri.'/home.html/');
         
		}else{
		     echo "Votre email ou mot de passe  est incorrect";
		}
      }else{
            echo "Veuillez completer tous les champs";
      }
?>




