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
           <h2 align="center">Ajouter un auteur... </h2><br/>
           <label><b>Auteur :</b></label>
           <input type="text" name="aut" class="zonetext" placeholder="Entrer l'id d'auteur.." " required><br/>
           <label><b>Nom :</b></label>
           <input type="text" name="noun" class="zonetext"  placeholder="Entrez le nom.." required><br/>
           <label><b>Prenom :</b></label>
           <input type="text" name="pre" class="zonetext" placeholder="Entrez le prenom .." required><br/>
            <label><b>Pseudonyme :</b></label>
           <input type="text" name="pseu" class="zonetext" placeholder="Entrez le pseudonyme .." required><br/>
           <label><b>Droits:</b></label>
           <input type="text" name="droit" class="zonetext" placeholder="Entrez les droits .." required><br/>
            
           <input type="submit" class="submit" name="btnajouter" value="Ajouter "/>
           <p><a href="Auteurs.php" class="submit" >Retour à la liste des auteurs</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btnajouter']))
             {

                $aut=$_POST['aut'];
                $noun=$_POST['noun'];
                $pre=$_POST['pre'];
                $pseu=$_POST['pseu'];
                $droit=$_POST['droit'];

            
                 $reqAdd="INSERT INTO auteur (id_auteur,nom,prenom,pseudonyme,droits) VALUES ('$aut','$noun','$pre','$pseu','$droit')";
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
