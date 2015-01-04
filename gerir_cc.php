<?php
  include_once ("include/include.php");

  include_once ("apresentacao/corpo_inicio.php");
  include_once ("apresentacao/corpo_fim.php");
  include_once ("apresentacao/menu.php");
  include_once ("apresentacao/inserir_dados_operacao.php");
  include_once ("apresentacao/gerir_cc.php");
   
  $tipoad='admin';
  $tipomain='main_user';
  $tiposa='SA';
  
  display_header("gerir a informação do centro de custo"); //ver se é assim
  
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

	
  display_menu_adicionar_op_gerir_cc($_GET['cc_id']); 
  	
  gerir_cc($_GET['cc_id']); 
  
  
  
  display_corpo_fim();
  
  display_footer();
  
?>
