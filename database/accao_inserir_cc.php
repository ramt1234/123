<?php

	ob_start();
  include_once ("..include/include.php");

  
  
  $cc_nome = pg_escape_string($_POST['cc_nome']);
  
  $cc_periodo = pg_escape_string($_POST['cc_periodo']);
  $cc_tipo_financ= pg_escape_string($_POST['cc_tipo_financ']);
  $cc_nome_curto= pg_escape_string($_POST['cc_nome_curto']);
  $cc_saldo= pg_escape_string($_POST['cc_saldo']);
  $cc_descricao= pg_escape_string($_POST['cc_descricao']);
  $cc_financi= pg_escape_string($_POST['cc_financi']);
  $cc_gerente_email= pg_escape_string($_POST['cc_gerente']);
  
  //global $conn;

  $query = "INSERT INTO operacoes(cc_nome, cc_periodo, cc_tipo_financ,cc_saldo,cc_nome_curto, cc_descricao,cc_financi, cc_gerente,) VALUES  
  											('".$cc_nome."','".$cc_periodo."','".$cc_tipo_financ."','".$cc_saldo."','".$cc_nome_curto."','".$cc_descricao ."','(SELECT p_bi from pessoal WHERE pessoal.p_email = '".$cc_gerente_email."')')";  
  $result = pg_query($conn, $query);
  
 
  if (!$result) {
  echo "Erro! Verificar se o benificiario e a cabimentacao existem.\n";
  exit;
  }
  	else
	{
		ob_flush();
		ob_end();
	}

?>