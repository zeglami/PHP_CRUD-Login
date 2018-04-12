<?php
require('conf_db.php');
?>

<form action="valAddEmpl.php" method="post" align="center">


<div>
<label>Nom:</label><br>
<input type=text name="nom"  />
</div>


<div>
<label>Prénom:</label><br>
<input type="text" name="prenom"  />
</div>


<div>
<label>Sexe:</label><br>
			<select name="sexe">
			<option value=M>M
			<option value=F>F
			</select>
</div>



<div>
	<label>Adrese:</label><br>
	<input type=text name="adresse"  />
</div>


<div>
	<label>Date de naissance:</label><br>
	<input type="date" name="date"  />
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