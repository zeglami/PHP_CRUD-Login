<?php
session_start();
require('conf_db.php');
?>

<?php
$login=$_POST["login"];
$password=$_POST["password"];



$sql="select * from users where login='$login' and password='$password' and type='AD' ";

 $result=mysqli_query($con,$sql);

 if(mysqli_num_rows($result)==1){
 	$_SESSION['login']=$login;
 	header('Location: allEmpls.php');

 }else{
 	header('Location: index.php');


 }




?>