<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="CSS/css_index.css">
</head>
<body>





	<a href=index.php>Déconnexion</a>
<br>
	<?php 
	
	echo 'Welcome '.$_SESSION['login'];
	 ?>

	<form action='valAddEmpl.php' method='post'>

	<table border=1 align=center>


<tr>
	<th>Code</th>
	<th>Nom</th>
	<th>Prénom</th>
	<th>Sexe</th>
	<th>Adresse</th>
	<th>Date de naissance</th>
	<th>Service</th>
	<th>Suppression</th>
	<th>Modifier</th>
</tr>
	

<?php
require('conf_db.php');

$sql="SELECT employes.code, employes.nom,employes.prenom,employes.sexe, employes.adresse,employes.datenaissance,services.designationserv	 FROM employes,services where employes.numserv=services.numserv";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))  {
   
   ?>

<tr>

	
	<td><?php printf ($row[0]);?></td>
	<td> <?php printf ($row[1]);?></td>
	<td><?php printf ($row[2]);?></td>
	<td><?php printf ($row[3]);?></td>
	<td><?php printf ($row[4]);?></td>
	<td><?php printf ($row[5]);?></td>
	<td><?php printf ($row[6]);?></td>
	
	<td> 
	<a href="delEmpl.php?id=<?php echo $row[0] ;?>">
			<img src='images/drop.png'>
	</a>
	</td>

	<td align=center><a href="editEmpl.php?id=<?php echo $row[0] ;?>"><img 
		src='images/edit.png'></a></td>
	
</tr>
	

  <?php  
      
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
	
	
	<tr>

		<th colspan='9'>Ajouter un employe:<a href="formAddEmpl.php">
			<img src='images/add.png'></th>



	</tr>
	<tr>

		<th colspan='9'>Ajouter une service:</th>
		


	</tr>
	


</table>



</form>


</div>


</body>
</html>


  