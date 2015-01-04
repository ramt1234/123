<?php

/*VAI BUSCAR O GESTOR DO CC*/
function get_ccs_gerente($p_bi)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados_ccs", 'SELECT * FROM centro_custo WHERE cc_gerente = $1'); //erro?
  $result = pg_execute($conn, "query_dados_ccs", array($p_bi));
  $ccs = pg_fetch_all($result);
  return $ccs;
}

/* VAI BUSCAR OS CCs DE QUE BENIFICIA*/
function get_ccs_benificia($p_bi)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados_op_ben", 'SELECT DISTINCT op_instancia FROM operacoes  WHERE op_benef = $1');
  $result = pg_execute($conn, "query_dados_op_ben", array($p_bi));
  $ccs = pg_fetch_all($result);
  $result2 = pg_query($conn, 'SELECT * FROM centro_custo WHERE cc_id in ($ccs)');
  $ccs2 = pg_fetch_all($result2);
  return $ccs2;
  
}

function get_ccs()
{
  global $conn;

  $result = pg_query($conn, "query_dados_ccs", 'SELECT * FROM centro_custo '); //erro?
  $ccs = pg_fetch_all($result);
  return $ccs;
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
