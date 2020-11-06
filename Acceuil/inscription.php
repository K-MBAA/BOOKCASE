<?php 
require_once('Connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style_login.css">
	

</head>
<body>
    <style>
        form #innn{
 	opacity:0.8;
  color:black;
  padding:20px 60px;
  margin:8px 0;
  border:none;
  cursor:pointer;
  width:100%;
  right:0;
  position:relative;
  background-color: #809fff;
  font-family: Verdana;

 }
 #innn:hover{
     background-color: white;
 }

        </style>
	 <div id="container">
            <form  method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='innn' value='inscription' name="btninsc" >
                <?php
                if(isset($_POST['btninsc']))
                {
                    $user=$_POST['username'];
                    $pass=$_POST['password'];

                    $req="INSERT INTO connexion VALUES ('$user','$pass')";
                    if($resultat=mysqli_query($conn,$req))
                     {
                           
                            header("location:acceuil.php");
                    }
                        else{
                        echo "<font color='red'>nom d'utilisateur ou mot de passe invalide.Réssayez.. </font>";
                    }
                     
                }
                ?>
            </form>
        </div>
    </body>
</html>