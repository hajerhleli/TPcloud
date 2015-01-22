<?php
include_once 'connexion.php';
$nom = $_POST['firstname'];
$prenom = $_POST['lastname'];
$tel = $_POST['telephone'];
$mail = $_POST['email'];
$adresse = $_POST['adresse'];
$password = $_POST['password'];
$cpass = $_POST['password2'];
$type = 0;
$name = $prenom.' '.$nom;

$sql = mysql_query("select * from tt_users where user_email = '$mail'");
if(mysql_numrows($sql) != 0) header("location: ../inscrivez-vous.php?E=1");
else{
mysql_query("insert into tt_users values('','$password','$mail','$name','$tel','$adresse','$type')") or die(mysql_error());
header("location: ../se-connecter.php");
}
?>