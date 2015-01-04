<?php
  include_once ("include/include.php");

  include_once ("apresentacao/corpo_inicio.php");
  include_once ("apresentacao/corpo_fim.php");
  include_once ("apresentacao/menu.php");
  include_once ("apresentacao/mudar_dados_pessoais.php");
  include_once ("database/dados_pessoais.php");
  
   
  $tipoad='admin';
  $tipomain='main_user';
  $tiposa='SA';
  
  display_header("Gerir Perfil"); //ver se é assim
  
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

	
  
  	
  mudar_dados_pessoais($_GET['cc_id']); //esta funçao ainda nao esta acabada, e preciso por os nomes dos campos direitos
  
  
  
  display_corpo_fim();
  
  display_footer();
  
?>
