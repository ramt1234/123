<?php
  include_once ("include/include.php");

  include_once ("apresentacao/corpo_inicio.php");
  include_once ("apresentacao/corpo_fim.php");
  include_once ("apresentacao/menu.php");
  include_once ("database/operacoes_cc.php");
  include_once ("database/tabela_operacoes_cc.php");
  include_once ("database/Cabimentacoes.php");
  include_once ("database/tabela_cab.php");
  
  $tipoad='admin';
  $tipomain='main_user';
  $tiposa='SA';
  
  display_header($_GET['nome_cc']);
  
  display_corpo_inicio();
	if($_SESSION['tipo'] == $tipomain or $_SESSION['tipo'] == $tiposa )
	{
		display_menu();
	}
	if($_SESSION['tipo'] == $tipoad)
	{
		display_menu_admin();
	}
	if($_GET['bi_gestor'] == $_SESSION['p_bi']);
  	{
  		display_menu_adicionar_op_gerir_cc($_GET['cc_id']);
  		display_menu_cabimentaçoes($_GET['cc_id']);
  	}
  	else
  	{
  		 display_menu_ver_cabimentaçoes($_GET['cc_id']);
  	}

  display_tabela_operacoes_cc($_GET['cc_id']);
 
  
  
  
  display_corpo_fim();
  
  display_footer();
  
?>
