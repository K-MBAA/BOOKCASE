<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Suppression donnees</title>
	<link rel="stylesheet" type="text/css" href="total_style.css">
</head>
<body>
	<div id="cooon"> 
		<br/><br/>
		<form class="for" name="fordelete">
     <p><a href="Librairies.php" class="submit">Listes des librairies</a></p><br/>
    <?php
    if(isset($_GET['supplib']))
    {
      $supprimer=$_GET['supplib'];
     $reqdelete="DELETE FROM librairie WHERE id_librairie='$supprimer'";
     $resul=mysqli_query($conn,$reqdelete);
     if($resul)
     {
        echo " <label style='text-align:center; color: green'> La Suppression a été correctement effectuée";
     }
     else{
        echo " <label style='text-align:center; color: red'> La Suppression a échouée";
     }  
   }

    ?>
 </form>
</div>
</body>
</html>