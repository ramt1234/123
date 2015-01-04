<?php

/*VAI BUSCAR AS OPERAÇOES*/
function operacao_do_cc($cc_id)
{
  global $conn;

  $result = pg_prepare($conn, "query_operacoes", 'SELECT * FROM operacoes WHERE op_instancia = $1 ');
  $result = pg_execute($conn, "query_operacoes", array($cc_id));
  $op = pg_fetch_all($result);
  return $op;
}

function transicoes_do_cc($cc_id)
{
  global $conn;
  $op=operacao_do_cc($cc_id);
  $opp=$op['op_id'];
  $result = pg_query($conn, 'SELECT * FROM transicoes WHERE t_de in ($opp) OR t_para in ($opp)');
  $tran = pg_fetch_all($result);
  return $tran;
}




?>
