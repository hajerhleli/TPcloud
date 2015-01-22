<?php
	// on démarre la session.
	session_start();
	
	//on vide les varible de session
	session_unset();
	
	//on detruit la session.
	session_destroy();
	
	//target page .
	header('Location: ../index.php');
	
	exit();
?>