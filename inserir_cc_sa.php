<?php
  include_once ("include/include.php");

  include_once ("apresentacao/corpo_inicio.php");
  include_once ("apresentacao/corpo_fim.php");
  include_once ("apresentacao/menu.php");
  include_once ("apresentacao/inserir_cc.php");
   
  $tipoad='admin';
  $tipomain='main_user';
  $tiposa='SA';
  
  display_header("Criar Centro de Custo"); //ver se � assim
  
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

	

  	
  inserir_cc(); 
  
  
  
  display_corpo_fim();
  
  display_footer();
  
?>
