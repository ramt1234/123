<?php

	ob_start();
  include_once ("..include/include.php");

  
  
  $op_tipo = pg_escape_string($_POST['op_tipo']);
  
  $op_valormon = pg_escape_string($_POST['op_valormon']);
  $op_descricao= pg_escape_string($_POST['op_descricao']);
  $op_data= pg_escape_string($_POST['op_data']);
  $op_instancia= pg_escape_string($_POST['op_instancia']);
  $op_resultde= pg_escape_string($_POST['op_resultde']);
  $op_benef_email= pg_escape_string($_POST['op_benef']);
  
  //global $conn;

  $query = "INSERT INTO operacoes(op_tipo, op_valormon, op_descricao,op_instancia,op_data, op_resultde, op_benef,) VALUES  
  											('".$op_tipo."','".$op_valormon."','".$op_descricao."','".$op_instancia."','".$op_data."','".$op_resultde ."','(SELECT p_bi from pessoal WHERE pessoal.p_email = '".$op_benef_email."')')";  
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