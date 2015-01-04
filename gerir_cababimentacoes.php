<?php
  include_once ("include/include.php");

  include_once ("apresentacao/corpo_inicio.php");
  include_once ("apresentacao/corpo_fim.php");
  include_once ("apresentacao/menu.php");
  include_once ("database/Cabimentacoes.php");
  include_once ("database/tabela_cab.php");
  include_once ("gerir_cab/menu.php");
  
  $tipoad='admin';
  $tipomain='main_user';
  $tiposa='SA';
  
  
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
	
  display_menu_cabimentaçoes($_GET['cc_id']);	
	
  display_tabela_cab_mudar($_GET['cc_id']);
  
  
  
  
  
  display_corpo_fim();
  
  display_footer();
  
?>
