<?php
	include_once ("include/include.php");
	
	include_once ("apresentacao/corpo_inicio.php");
	include_once ("apresentacao/corpo_fim.php");
	include_once ("apresentacao/menu.php");
	include_once ("database/centrodecusto.php");
	include_once ("database/tabela_ccben_ccger.php");
	

	$tipoad='admin';
	$tipomain='main_user';
	$tiposa='SA';

	display_header($_GET['nome_cc']); 

	display_corpo_inicio();
	if($_SESSION['tipo'] == $tipomain or $_SESSION['tipo'] == $tiposa )
	{
		display_menu();
	}
	if($_SESSION['tipo'] == $tiposa  )
	{
		display_menu_sa();
		
	}
	if($_SESSION['tipo'] == $tipoad)
	{
		display_menu_admin();
	}
	
	
	display_tabela_ccustos_ger($_SESSION['p_bi']); 
	display_tabela_ccustos_ben($_SESSION['p_bi']);


	display_corpo_fim();

	display_footer();

?>