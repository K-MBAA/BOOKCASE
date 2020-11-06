<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>Librairies</title>
	<link rel="stylesheet" type="text/css" href="total_style.css">

</head>
<body>
	 <br><br><br/>
    Ajouter une librairie :<br/><a href="ajouterlib.php" ><img src="ajouter.jpg" width="40px" height="40px"/></a><br/>
    <br><br>
	<table width="100%"  border="1">
		<tr>
			<th>Librairie</th>
			<th >Nom</th>
			<th >Adresse</th>
			<th >No-ISBN du livre</th>
			<th>Supprimer</th>
			<th>Modifier</th>
		</tr>
		<br>
		<?php 
		$req="SELECT * FROM librairie ";
         $resultat=mysqli_query($conn,$req);
		while($ligne=mysqli_fetch_assoc($resultat))
        {
		?>
        <tr>
			<td ><?php echo $ligne['id_librairie']?></td>
			<td ><?php echo $ligne['nom']?></td>
			<td ><?php echo $ligne['adresse']?></td>
			<td ><?php echo $ligne['ISBN']?></td>		
			<td ><a href="Supprimerlib.php?supplib=<?php echo $ligne['id_librairie']; ?>"" ><img src="poubelle.png" width="60px" height="60px" /></a></td>
			<td><a href="Modifierlib.php?modlib=<?php echo $ligne['id_librairie']; ?>"" ><img src="modifier.png" width="60px" height="60px" /></a></td>
		</tr>
 
	<?php }  ?>
	</table>
</body>
</html>