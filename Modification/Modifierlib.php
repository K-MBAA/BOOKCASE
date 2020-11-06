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
	</style>
	<div id="cont">
		<br/><br/>
		<form name="formupdate" method="POST" class="formul">
			   <br/><br/>
           <h2 align="center">Mettre à jour une librairie... </h2><br/>
           <label><b>Librairie :</b></label>
           <input type="text" name="librair" class="zonetext" value="<?php echo $_GET['modlib'] ?>" readonly><br/>
           <label><b>Nom :</b></label>
           <input type="text" name="nomm" class="zonetext"  placeholder="Entrez le nom.." required><br/>
           <label><b>Adresse :</b></label>
           <input type="text" name="adrr" class="zonetext" placeholder="Entrez l'adresse .." required><br/>
            <label><b>ISBN du livre :</b></label>
           <input type="text" name="ISliv" class="zonetext" placeholder="Entrez le No-ISBN du livre .." required><br/>
 
           <input type="submit" class="submit" name="btmod" value="Mettre à Jour"/>
           <p><a href="Librairies.php" class="submit" >Retour à la liste des librairies</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btmod']))
             {

             	$li=$_POST['librair'];
             	$no=$_POST['nomm'];
             	$ad=$_POST['adrr'];
             	$is=$_POST['ISliv'];
          

              $modifier=$_GET['modlib'];
             	
                $reqUp="UPDATE librairie SET  nom='$no', adresse='$ad' , ISBN='$is' WHERE id_librairie='$modifier' ";
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