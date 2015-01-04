<?php

	include_once("include/include.php");
	include_once ("apresentacao/header_login.php");
	include_once ("apresentacao/footer_login.php");

	session_destroy();

	display_header_login();

	display_footer_login();
?>
