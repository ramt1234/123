<?php

	ob_start();
  include_once ("..include/include.php");

  
  
  $cab_valorpedido = pg_escape_string($_POST['cab_valorpedido']);
  
  $cab_descricao_resposta = pg_escape_string($_POST['cab_descricao_resposta']);
  $cab_resposta= pg_escape_string($_POST['cab_resposta']);
  $cab_requerimento= pg_escape_string($_POST['cab_requerimento']);
  $cab_criado_por= pg_escape_string($_POST['cab_requerimento']);
  
  //global $conn;

  $query = "INSERT INTO cabimentancao(cab_valorpedido, cab_descricao_resposta, cab_resposta,cab_requerimento,cab_criado_por) VALUES  
  											('".$cab_valorpedido."','".$cab_descricao_resposta."','".$cab_resposta."','".$cab_requerimento."','".$cab_criado_por ."')";  
  $result = pg_query($conn, $query);
  
 
  if (!$result) {
  echo "Erro! .\n";
  exit;
  }
  	else
	{
		ob_flush();
		ob_end();
	}

?>