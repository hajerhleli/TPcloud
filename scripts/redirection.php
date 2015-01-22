<?php
extract($_POST);
session_start();
$_SESSION["id"]=$id;
echo $id;
?>