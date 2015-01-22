<?php
//se connecter mysql
$con = mysql_connect("localhost","root","");

// se connecter � la  DB telecomapp
$DB = mysql_select_db("telecomapp", $con);
?>