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
        body{
            background-color: pink;
        }
    </style>
	 <div id="container">
            <form  method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' name="btlogin" >
                <?php
                if(isset($_POST['btlogin']))
                {
                    $req="SELECT * from connexion Where utilisateur='".$_POST['username']."' and password='".$_POST['password']."' ";
                    if($resultat=mysqli_query($conn,$req))
                     {
                        $ligne=mysqli_fetch_assoc($resultat);
                        if($ligne!=0)
                        {
                            session_start();
                            $SESSION['login']=$_POST['username'];
                            header("location:acceuil.php");
                        }
                        else{
                        echo "<font color='red'>nom d'utilisateur ou mot de passe invalide.Réssayez.. </font>";
                    }
                     }
                }
                ?>
            </form>
        </div>
    </body>
</html>