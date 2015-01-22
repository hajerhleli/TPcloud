<?php
require_once 'connexion.php';
session_start();
$user = $_SESSION['user'];
$desc = mysql_real_escape_string($_POST['textarea']);
$date = date("m/d/y");


    mysql_query("insert into tt_avis values ('','$desc','$user','$date')") or die (mysql_error());

header ("location: ../article.php?E=1");
?>