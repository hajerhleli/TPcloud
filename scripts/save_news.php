<?php
require_once 'connexion.php';
session_start();

$desc = mysql_real_escape_string($_POST['textarea']);
$date = date("m/d/y");

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $current = $_POST['id'];

    mysql_query("update tt_news
					set news_news = '$desc'
					where news_id = '$current'");
}
else {

    mysql_query("insert into tt_news values ('','$desc','$date')");
}
header ("location: ../gestion-nouvelles.php?E=1");
?>