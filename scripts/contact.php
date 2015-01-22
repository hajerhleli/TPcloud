<?php
    include_once 'connexion.php';
    $nom = $_POST['firstname'];
    $mail = $_POST['email'];
    $sujet = $_POST['sujet'];
    $comment = $_POST['comments'];
    $date = date("F j, Y, g:i a");
    mysql_query("insert into tt_comments values('','$nom','$mail','$date','$sujet','$comment')") or die(mysql_error());
    header("location: ../contact-us.php?E=1");
?>