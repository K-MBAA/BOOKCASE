<?php
include('Connection.php');
include ('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un livre</title>
</head>
<body>
  <style type="text/css">
    .submit{
  opacity:0.8;
  color:black;
  padding:20px 60px;
  margin:8px 0;
  border:none;
  cursor:pointer;
  width:30%;
  right:0;
  position:relative;
  background-color: pink;
  font-family: Verdana;

 }
 .formul{
  width:40%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background-color: white;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    padding:30px;
}
.submit:hover{
  background-color: #d1e0e0;
}

  </style>
  <br/><br/>
   <div id="cc">
   	<form name="formadd" class="formul" enctype="multipart/form-data" method='POST'>
   		<br/><br/>
           <h2 align="center">Ajouter nouveau livre... </h2><br/>
          <label><b>No-ISBN :</b></label>
           <input type="text" name="txtISBN" class="zonetext"  placeholder="Entrez le No-ISBN" required><br/>
           <label><b>Titre :</b></label>
           <input type="text" name="txttitre" class="zonetext"  placeholder="Entrez le titre.." required><br/>
           <label><b>Prix de vente :</b></label>
           <input type="text" name="txtprix" class="zonetext" placeholder="Entrez le prix .." required><br/>
            <label><b>Auteur :</b></label>
           <input type="text" name="txtauteur" class="zonetext" placeholder="Entrez l'auteur .." required><br/>
           <label><b>Edition :</b></label>
           <input type="text" name="txtedition" class="zonetext" placeholder="Entrez l'Edition" required><br/>
           
          

           <input type="submit" class="submit" name="btnajouter" value="Ajouter"/>
           <p><a href="Livres.php" class="submit" >Retour à la liste des livres</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btnajouter']))
             {

             	$isbn=$_POST['txtISBN'];
             	$titree=$_POST['txttitre'];
             	$pprix=$_POST['txtprix'];
             	$auteurr=$_POST['txtauteur'];
             	$editionn=$_POST['txtedition'];

             
           

            
                 $reqAdd="INSERT INTO  livre (ISBN,titre,prix_vente,id_auteur,id_edition) VALUES ('$isbn','$titree','$pprix','$auteurr','$editionn')";
                  $resultat=mysqli_query($conn,$reqAdd);
                  if($resultat)
                  {
                    echo "Ajout est fait avec succes";
                  }
                  else
                  {
                    
                    echo "Echec";
                  }

                  
               }
              ?>
           </label>
   	 </form>
   </div>
</body>
</html>