<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asus
 * Date: 09/03/14
 * Time: 15:07
 * To change this template use File | Settings | File Templates.
 */
require_once 'connexion.php';
session_start();
$current = $_GET['item'];
mysql_query("delete from tt_news where news_id = $current") or die(mysql_error());
header("location: ../gestion-nouvelles.php?E=1");
?>