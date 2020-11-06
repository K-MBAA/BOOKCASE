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
    <br><br>
    Ajouter un livre :<br/><a href="ajouterliv.php" ><img src="ajouter.jpg" width="40px" height="40px"/></a><br/>
	<table width="100%" border="1">
		<tr>
			<th >No_ISBN</th>
			<th >Titre</th>
			<th >Prix de vente</th>
			<th >Auteur</th>
			<th >Edition</th>
			<th>Supprimer</th>
			<th>Modifier</th>
		</tr>
		<br>
		<?php 
		$req="SELECT * FROM livre  ";
         $resultat=mysqli_query($conn,$req);
		while($ligne=mysqli_fetch_assoc($resultat))
        {
		?>
        <tr>
			<td ><?php echo $ligne['ISBN']?></td>
			<td ><?php echo $ligne['titre']?></td>
			<td ><?php echo $ligne['prix_vente']?></td>
			<td ><?php echo $ligne['id_auteur']?></td>		
			<td ><?php echo $ligne['id_edition']?></td>
			<td><a href="Supprimerliv.php?supp=<?php echo $ligne['ISBN']; ?>" ><img src="poubelle.png" width="60px" height="60px" /></a></td>
			<td><a href="Modifierliv.php?mod=<?php echo $ligne['ISBN']; ?>" ><img src="modifier.png" width="60px" height="60px" /></a></td>
		</tr>
 
	<?php }  ?>
	</table>
</body>
</html>