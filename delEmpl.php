<?php
require('conf_db.php');
?>


<?php 
$id = $_GET['id'];

$sql="delete from employes where code='$id'";

if (mysqli_query($con, $sql)) {
      echo '<script>window.location.href = "allEmpls.php";</script>';

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



 ?>