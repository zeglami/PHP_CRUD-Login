<?php
require('conf_db.php');
?>

<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$sexe=$_POST["sexe"];
$adresse=$_POST["adresse"];
$date=$_POST["date"];
$service=$_POST["service"];

//echo $service;

if (empty($nom)) {
	echo "enyter nom";
}
if (empty($prenom)) {
	echo "enyter prenom";
}
if (empty($sexe)) {
	echo "enyter sexe";
}
if (empty($adresse)) {
	echo "enyter adresse";
}
if (empty($date)) {
	echo "enyter date";
}
if (empty($service)) {
	echo "enyter service";
}


 $sql="select services.numServ from services where designationserv='$service' ";

 $result=mysqli_query($con,$sql);



$row=mysqli_fetch_array($result);

//printf ($row["numServ"]);

$sqll="insert into employes values(DEFAULT,'$nom','$prenom','$sexe','$adresse','$date', '$row[0]')";



if (mysqli_query($con, $sqll)) {
      echo '<script>window.location.href = "allEmpls.php";</script>';

} else {
    echo "Error: " . $sqll . "<br>" . mysqli_error($con);
}




?>