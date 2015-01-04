<?php
	include_once ("include/include.php");
	
	include_once ("apresentacao/corpo_inicio.php");
	include_once ("apresentacao/corpo_fim.php");
	include_once ("apresentacao/menu.php");
	include_once("database/dados_pessoais");
	include_once("database/tabela_dados_pessoais");

	

	$tipoad='admin';
	$tipomain='main_user';
	$tiposa='SA';

	display_header('Perfil'); 

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
	
  display_tabela_dados_pessoais($_SESSION['p_bi']);// falta fazer o display da tabela, a query ja esta feita
  display_menu_dados($_SESSION['p_bi']);

  display_corpo_fim();
  
  display_footer();
  
?>