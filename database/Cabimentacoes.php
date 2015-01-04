<?php

/*VAI BUSCAR AS CABIMENTACOES DO CC*/
function get_cabi_cc($cc_id)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados_cabi", 'SELECT * FROM cabimentacao WHERE cab_criado_por = $1');
  $result = pg_execute($conn, "query_dados_cabi", array($cc_id));
  $cabres = pg_fetch_all($result);
  return $cabres;
}

/* VAI BUSCAR AS CABIMENTACOES APRECIADAS PELO SA*/
function get_cabi_apreciado($p_bi)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados_op_ben", 'SELECT * FROM cabimentacao  WHERE cab_apreciada_por = $1');
  $result = pg_execute($conn, "query_dados_op_ben", array($p_bi));
  $cabapre = pg_fetch_all($result);
 /* $result2 = pg_query($conn, 'SELECT * FROM centro_custo WHERE cc_id in ($ccs)');
  $ccs2 = pg_fetch_all($result2);*/
  return $cabapre;
  
}

function get_cabi_not_apr()
{
  global $conn;

  $result = pg_query($conn, "query_dados_op_ben", 'SELECT * FROM cabimentacao  WHERE cab_resposta = FALSE');
  $cabapro = pg_fetch_all($result);
 /* $result2 = pg_query($conn, 'SELECT * FROM centro_custo WHERE cc_id in ($ccs)');
  $ccs2 = pg_fetch_all($result2);*/
  return $cabapro;
  
}



/*VAI BUSCAR OS DOCENTES QUE TRABALHAM NO CURSO*/
/*
function get_docentes_curso($p_bi)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados_prof2", 'SELECT nome_prof, email_prof FROM (((docente JOIN lecciona ON (c_prof = cprof)) JOIN disciplina ON (c_discip = c_disciplina)) JOIN curso ON (contidaEm = p_bi)) WHERE p_bi = $1');
  $result = pg_execute($conn, "query_dados_prof2", array($p_bi));
  $docentes = pg_fetch_all($result);
  return $docentes;
}



*/


?>
