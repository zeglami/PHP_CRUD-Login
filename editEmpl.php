<?php
require('conf_db.php');
?>

<?php 

  $id = $_GET['id'];

 $sql="select *from employes where code='$id' ";

 $result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


 ?>



<form action="updateEmpl.php" method="post" align="center">

<input type=hidden name="id"  value="<?php echo $row[0] ; ?>" />


<div>
<label>Nom:</label><br>
<input type=text name="nom"  value="<?php echo $row[1] ; ?>" />
</div>


<div>
<label>Prénom:</label><br>
<input type="text" name="prenom"  value="<?php echo $row[2] ; ?>" />
</div>


<div>
<label>Sexe:</label><br>
			<select name="sexe" value="<?php echo $row[3] ; ?>">
			<option value=M>M
			<option value=F>F
			</select>
</div>



<div>
	<label>Adrese:</label><br>
	<input type=text name="adresse" value="<?php echo $row[4] ; ?>" />
</div>


<div>
	<label>Date de naissance:</label><br>
	<input type="date" name="date" value="<?php echo $row[5] ; ?>" />
</div>


<div>

<label>Type de service :</label><br>

<?php 
$sql="select *from services";

if ($result=mysqli_query($con,$sql))
  {

 

echo '<select name="service">'; // Open your drop down box

// Loop through the query results, outputing the options one by one

while ($row=mysqli_fetch_row($result)) {

   echo '<option value="'.$row[1].'">'.$row[1].'</option>';
}

echo '</select>';// Close your drop down bo

		



}
 ?>

</div>
	<input type="submit"   value="Ajouter Client" />
	


</form>










 
