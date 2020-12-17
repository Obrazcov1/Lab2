<?php
	session_start();
	session_destroy();
	header('Location:pageStart.php');

?>