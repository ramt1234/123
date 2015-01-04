<?php
	//nao esta acabada a pagina, falta ver o que se poe!
	include_once ("include/include.php");
	
	include_once ("apresentacao/corpo_inicio.php");
	include_once ("apresentacao/corpo_fim.php");
	include_once ("apresentacao/menu.php");
	include_once ("database/docente.php"); // mudar o nome da pagina
;


	display_header(Home);

	display_corpo_inicio();

	$tipoad='admin';
	$tipomain='main_user';
	$tiposa='SA';

	if($_SESSION['tipo'] == $tipomain)
	{
		display_menu();
		
	}
	if($_SESSION['tipo'] == $tiposa)
	{
		display_menu_sa();
		display_menu();
	}
		if($_SESSION['tipo'] == $tipoad)
	{
		display_menu_admin();
		display_menu();
	}



	display_corpo_fim();

	display_footer();

?>