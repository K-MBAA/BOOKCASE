<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>Livres</title>
	<link rel="stylesheet" type="text/css" href="total_style.css">

</head>
<body>
	 <br><br><br/>
    Ajouter un auteur :<br/><a href="Ajouteraut.php" ><img src="ajouter.jpg" width="40px" height="40px"/></a><br/>
    <br><br>
	<table width="100%" border="1">
		<tr>
			<th>Auteur</th>
			<th >Nom</th>
			<th >Prénom</th>
			<th >Pseudonyme</th>
			<th >Droits</th>
			<th>Supprimer</th>
			<th>Modifier</th>
		</tr>
		<br>
		<?php 
		$req="SELECT * FROM auteur ";
         $resultat=mysqli_query($conn,$req);
		while($ligne=mysqli_fetch_assoc($resultat))
        {
		?>
        <tr>
			<td ><?php echo $ligne['id_auteur']?></td>
			<td ><?php echo $ligne['nom']?></td>
			<td ><?php echo $ligne['prenom']?></td>
			<td ><?php echo $ligne['pseudonyme']?></td>		
			<td ><?php echo $ligne['droits']?></td>
			<td><a href="Supprimeraut.php?suppaut=<?php echo $ligne['id_auteur']; ?>" ><img src="poubelle.png" width="60px" height="60px" /></a></td>
			<td><a href="Modifieraut.php?modaut=<?php echo $ligne['id_auteur']; ?>" ><img src="modifier.png" width="60px" height="60px" /></a></td>
		</tr>
 
	<?php }  ?>
	</table>
</body>
</html>
