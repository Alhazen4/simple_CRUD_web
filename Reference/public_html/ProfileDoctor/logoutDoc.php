<?php
	session_start();
	session_destroy();
    header('Location: ../SignupDoc/signindoc.php');
?>