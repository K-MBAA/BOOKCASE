<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>Editions</title>
	<link rel="stylesheet" type="text/css" href="total_style.css">

</head>
<body>
	 <br><br><br/>
    Ajouter une editions :<br/><a href="Ajoutered.php" ><img src="ajouter.jpg" width="40px" height="40px"/></a><br/>
    <br><br>
	<table width="100%" border="1">
		<tr>
			<th>Edition </th>
			<th >date d'edition</th>
			<th >Ordre</th>
			<th >Numéro d'exemplaires</th>
			<th>Supprimer</th>
			<th>Modifier</th>
		</tr>
		<br>
		<?php 
		$req="SELECT * FROM edition  ";
         $resultat=mysqli_query($conn,$req);
		while($ligne=mysqli_fetch_assoc($resultat))
        {
		?>
        <tr>
			<td ><?php echo $ligne['id_edition']?></td>
			<td ><?php echo $ligne['date_edition']?></td>
			<td ><?php echo $ligne['ordre']?></td>
			<td ><?php echo $ligne['NumExemplaires']?></td>		
			<td><a href="Supprimered.php?suppe=<?php echo $ligne['id_edition'] ?>" ><img src="poubelle.png" width="60px" height="60px" /></a></td>
			<td><a href="Modifiered.php?mode=<?php echo $ligne['id_edition']; ?>" ><img src="modifier.png" width="60px" height="60px" /></a></td>
		</tr>
 
	<?php }  ?>
	</table>
</body>
</html>