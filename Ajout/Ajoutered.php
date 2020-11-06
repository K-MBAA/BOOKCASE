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
           <h2 align="center">Ajouter une edition... </h2><br/>
           <label><b>Edition :</b></label>
           <input type="text" name="ed" class="zonetext" placeholder="Entrer une edition..."  required><br/>
           <label><b>Date d'edition :</b></label>
           <input type="text" name="datee" class="zonetext"  placeholder="Entrez la date d'edition.." required><br/>
           <label><b>Ordre :</b></label>
           <input type="text" name="ord" class="zonetext" placeholder="Entrez l'ordre .." required><br/>
            <label><b>Numero d'exemplaires :</b></label>
           <input type="text" name="num" class="zonetext" placeholder="Entrez le numero d'exemplaires .." required><br/>
 
           <input type="submit" class="submit" name="btnajouter" value="Ajouter"/>
           <p><a href="Editions.php" class="submit" >Retour à la liste des editions</a></p>

           <label style="text-align:center; color: green">
           	<?php 
             if(isset($_POST['btnajouter']))
             {

                $edd=$_POST['ed'];
                $datte=$_POST['datee'];
                $ordd=$_POST['ord'];
                $n=$_POST['num'];

            
                 $reqAdd="INSERT INTO  edition (id_edition,date_edition,ordre,NumExemplaires) VALUES ('$edd','$datte','$ordd','$n')";
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