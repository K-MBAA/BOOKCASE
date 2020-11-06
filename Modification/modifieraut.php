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
  background-color: pink;
  font-family: Verdana;
}
.bbb{
	width:150px;
}
.submit:hover{
  background-color: #d1e0e0;
}
	</style>
	<div id="cont">
		<br/><br/>
		<form name="formupdate" method="POST" class="formul">
			   <br/><br/>
           <h2 align="center">Mettre à jour un Auteur... </h2><br/>
           <label><b>Auteur :</b></label>
           <input type="text" name="aut" class="zonetext" value="<?php echo $_GET['modaut']; ?> " readonly><br/>
           <label><b>Nom :</b></label>
           <input type="text" name="noun" class="zonetext"  placeholder="Entrez le nom.." required><br/>
           <label><b>Prenom :</b></label>
           <input type="text" name="pre" class="zonetext" placeholder="Entrez le prenom .." required><br/>
            <label><b>Pseudonyme :</b></label>
           <input type="text" name="pseu" class="zonetext" placeholder="Entrez le pseudonyme .." required><br/>
           <label><b>Droits:</b></label>
           <input type="text" name="droit" class="zonetext" placeholder="Entrez les droits .." required><br/>
            
           <input type="submit" class="submit" name="btmod" value="Mettre à Jour"/>
           <p><a href="Auteurs.php" class="submit" >Retour à la liste des auteurs</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btmod']))
             {

             	$aut=$_POST['aut'];
             	$noun=$_POST['noun'];
             	$pre=$_POST['pre'];
             	$pseu=$_POST['pseu'];
              $droit=$_POST['droit'];
          
              $modifier=$_GET['modaut'];

             	
                $reqUp="UPDATE auteur SET  nom='$noun', prenom='$pre' , pseudonyme='$pseu' , droits='$droit' WHERE id_auteur='$modifier' ";
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
