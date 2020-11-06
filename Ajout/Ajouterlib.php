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
           <h2 align="center">Ajouter une librairie... </h2><br/>
           <label><b>Librairie :</b></label>
           <input type="text" name="librair" class="zonetext"  placeholder="Entrez la librairie" required><br/>
           <label><b>Nom :</b></label>
           <input type="text" name="nomm" class="zonetext"  placeholder="Entrez le nom.." required><br/>
           <label><b>Adresse :</b></label>
           <input type="text" name="adrr" class="zonetext" placeholder="Entrez l'adresse .." required><br/>
            <label><b>ISBN du livre :</b></label>
           <input type="text" name="ISliv" class="zonetext" placeholder="Entrez le ISBN du livre .." required><br/>
 
           <input type="submit" class="submit" name="btnajouter" value="Ajouter"/>
           <p><a href="Librairies.php" class="submit" >Retour à la liste des librairies</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btnajouter']))
             {
                $li=$_POST['librair'];
                $no=$_POST['nomm'];
                $ad=$_POST['adrr'];
                $is=$_POST['ISliv'];

             
            
                 $reqAdd="INSERT INTO  librairie (id_librairie,nom,adresse,ISBN) VALUES ('$li','$no','$ad','$is')";
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