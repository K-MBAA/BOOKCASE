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
     <p><a href="Editions.php" class="submit">Listes des Editions</a></p><br/>
    <?php
    if(isset($_GET['suppe']))
    {
      $supprimer=$_GET['suppe'];
     $reqdelete="DELETE FROM edition WHERE id_edition='$supprimer'";
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