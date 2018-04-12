<?php
require('conf_db.php');
?>

<?php
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$sexe=$_POST["sexe"];
$adresse=$_POST["adresse"];
$date=$_POST["date"];
$service=$_POST["service"];

//echo $service;

if (empty($nom)) {
	echo "WTF";
}

 $sql="select services.numServ from services where designationserv='$service' ";

 $result=mysqli_query($con,$sql);



$row=mysqli_fetch_array($result);

//printf ($row["numServ"]);

$sqll="update employes set nom='$nom',prenom='$prenom',sexe='$sexe',adresse='$adresse',	datenaissance='$date', 	numServ='$row[0]' WHERE code = $id";



if (mysqli_query($con, $sqll)) {
      echo '<script>window.location.href = "allEmpls.php";</script>';

} else {
    echo "Error: " . $sqll . "<br>" . mysqli_error($con);
}




?>