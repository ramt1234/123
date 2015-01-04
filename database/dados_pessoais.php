<?php

function get_dados_pessoais($p_bi)
{
  global $conn;

  $result = pg_prepare($conn, "query_dados", 'SELECT p_bi, p_nif, p_email, p_nome, p_cargo, p_telefone, p_telfext, p_morada, p_institut FROM pessoal WHERE sigla = $1');
  $result = pg_execute($conn, "query_dados", array($sigla));
  $dados = pg_fetch_all($result);
  return $dados;
}

?>