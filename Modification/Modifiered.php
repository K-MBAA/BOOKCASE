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
           <h2 align="center">Mettre à jour une Edition... </h2><br/>
           <label><b>Edition :</b></label>
           <input type="text" name="ed" class="zonetext" value="<?php echo $_GET['mode'] ?>" readonly><br/>
           <label><b>Date d'edition :</b></label>
           <input type="text" name="datee" class="zonetext"  placeholder="Entrez la date d'edition.." required><br/>
           <label><b>Ordre :</b></label>
           <input type="text" name="ord" class="zonetext" placeholder="Entrez l'ordre .." required><br/>
            <label><b>Numero d'exemplaires :</b></label>
           <input type="text" name="num" class="zonetext" placeholder="Entrez le numero d'exemplaires .." required><br/>
 
           <input type="submit" class="submit" name="btmod" value="Mettre à Jour"/>
           <p><a href="Editions.php" class="submit" >Retour à la liste des editions</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btmod']))
             {

             	$edd=$_POST['ed'];
             	$datte=$_POST['datee'];
             	$ordd=$_POST['ord'];
             	$n=$_POST['num'];
          
              $modifier=$_GET['mode'];

             	
                $reqUp="UPDATE edition SET  date_edition='$datte', ordre='$ordd' , NumExemplaires='$n' WHERE id_edition='$modifier' ";
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