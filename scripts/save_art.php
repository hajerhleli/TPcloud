<?php
require_once 'connexion.php';
session_start();
$titre = $_POST['titre'];
$cat = $_POST['cat'];
$desc = mysql_real_escape_string($_POST['textarea']);
$date = date("m/d/y");

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $current = $_POST['id'];
    if(isset($_FILES['photo-site']) && $_FILES['photo-site']['error']== 0){

        $filename=$_FILES['photo-site']['name'];
        move_uploaded_file($_FILES['photo-site']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/telecomapp.tn/images/'.$filename);
        mysql_query("update tt_articles set art_photo = '$filename' where art_id = $current");

    }
    mysql_query("update tt_articles
					set art_titre = '$titre', art_desc = '$desc',art_cat='$cat'
					where art_id = '$current'");
}
else {
    $photo = $_FILES['photo-site']['name'];
    move_uploaded_file($_FILES['photo-site']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/telecomapp.tn/images/'.$photo);
    mysql_query("insert into tt_articles values ('','$titre','$desc','$date','$user','$photo','0','$cat')");
}
header ("location: ../espace-admin.php?E=1");
?>