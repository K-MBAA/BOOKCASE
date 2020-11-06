<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>Mettre a jour</title>

</head>
<body>
	<style type="text/css">
		.formul{
	width:50%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background-color: white;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.submit{
  opacity:0.8;
  color:black;
  padding:20px 60px;
  margin:8px 0;
  border:none;
  cursor:pointer;
  width:200px;
  right:0;
  position:relative;
  background-color: #809fff;
  font-family: Verdana;
}
.bbb{
	width:150px;
}
.monBouton
{
background: url(/image.png);
}

	</style>
	<div id="cont">
		<br/><br/>
		<form name="formupdate" method="POST" class="formul">
			   <br/><br/>
           <h2 align="center">Mettre à jour un livre... </h2><br/>
           <label><b>No-ISBN :</b></label>
           <input type="text" name="txtI" class="zonetext"  value="<?php echo $_GET['mod'] ?>" readonly><br/>
           <label><b>Titre :</b></label>
           <input type="text" name="txttitre" class="zonetext"  placeholder="Entrez le titre.." required><br/>
           <label><b>Prix de vente :</b></label>
           <input type="text" name="txtprix" class="zonetext" placeholder="Entrez le prix .." required><br/>
            <label><b>Auteur :</b></label>
           <input type="text" name="txtauteur" class="zonetext" placeholder="Entrez l'auteur .." required><br/>
           <label><b>Edition :</b></label>
           <input type="text" name="txtedition" class="zonetext" placeholder="Entrez l'Edition" required><br/>
 
           <input type="submit" class="submit" name="btmod" value="Mettre à Jour"/>
           <p><a href="Livres.php" class="submit" >Retour à la liste des livres</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btmod']))
             {

              $I=$_POST['txtI'];
             	$T=$_POST['txttitre'];
             	$P=$_POST['txtprix'];
             	$A=$_POST['txtauteur'];
             	$E=$_POST['txtedition'];

               $modifier=$_GET['mod'];
              
                $reqUp="UPDATE livre SET titre='$T' , prix_vente='$P' , id_auteur='$A' , id_edition='$E'  WHERE  ISBN='$modifier' ";
                $resultat=mysqli_query($conn,$reqUp);
                  if($resultat)
                  {
                    echo "Mise a jour des données validé";
                  }
                  else
                  {
                     echo "Echec de modification des données";
                  }

             }
           	?>
		</form> 
	</div>
</body>
</html>