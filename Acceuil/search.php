<?php
require_once('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultats...</title>
</head>
<body>
    <style type="text/css">
#arti{
  width:80%;
  margin-left:auto;
  margin-right:auto;
  padding:2%;
  vertical-align: middle;
}
  #auto
  {
    border:3px solid #999;
    width:250px;
    height:400px;
    margin:10px;
    padding-left:20px;
    float:left;
  }
  .search{
    width:200px;
    height:40px;
  }
  .btn{
    width: 100px;
    height:40px;
  }
  .btn:hover{
    background-color:#809fff;
  }
    </style>
    <br/>
	<div id="arti">
    <p><h3> Veillez ecrire le titre du livre que vous souhaitez chercher ..</h3> </p>
    <form method="POST" >
     <input type="text" name="search" placeholder="Recherche par titre...." class="search"/>
     <input type="submit" name="btn" value="Search" class="btn"/>
            </br>
            <?php
            if(isset($_POST['btn']))
            {
                $mc=$_POST['search'];
                $reqSelect="SELECT * FROM livre Where titre LIKE '%$mc%' ";
            
              $resultat=mysqli_query($conn,$reqSelect);
               while($ligne=mysqli_fetch_assoc($resultat))
               {
                
              ?>
               <div id="auto">
                <br/>
                No_ISBN :<?php echo  $ligne['ISBN']; ?><br/>
                Titre :<?php echo  $ligne['titre']; ?><br/>
                Prix de Vente :<?php echo  $ligne['prix_vente']; ?><br/>
                Auteur :<?php echo  $ligne['id_auteur']; ?><br/>
                Edition :<?php echo  $ligne['id_edition']; ?>
                </div>
            
               <?php } 
            } 
              ?>

        </div>
	</form>
</body>
</html>