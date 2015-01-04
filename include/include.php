<?php

	
	
	$BASEPATH = '/opt/sibd/sibd1402/public_html';  // insert the base path of our website
	$INCPATH = $BASEPATH.'/include';
	$DBPATH = $BASEPATH.'/database';

	set_include_path($BASEPATH.'/lib');

	require_once($INCPATH.'/database.php');
	require_once($INCPATH.'/session.php');
	
	include_once($BASEPATH.'apresentacao/header.php');
	include_once($BASEPATH.'apresentacao/footer.php');
	
	//require_once($INCPATH.'/smarty.php');
	//include_once ("apresentacao/corpo_inicio.php");
	//include_once ("apresentacao/corpo_fim.php");
	//include_once ("apresentacao/menu.php");
 
 ?>
  
