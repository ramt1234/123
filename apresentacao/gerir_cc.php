<?php
	//este nao vai buscar a funcao ao database, faz a conecao logo
  //include_once ("database/accao_inserir_curso.php");

function gerir_cc($cc_id)
{
global $conn;
$result = pg_query($conn, "SELECT * FROM centro_custos where cc_id = '$cc_id'");  
$row = pg_fetch_assoc($result);  

echo "<div id=\"tabela\">";
echo "<ul>  
<form name='update' action='apresentaçao/gerir_cc.php' method='POST' >  
   
<li>Nome do centro de Custo:</li><li><input type='text' name='cc_nome_updated' value='$row[cc_nome]'  /></li>  
<li>Perido do Centro de Custo:</li><li><input type='text' name='cc_periodo_updated' value='$row[cc_periodo]' /></li>

<li>Tipo de Financiamento:</li><li><input type='text' name='cc_tipo_financ_updated' value='$row[cc_tipo_financ]' /></li> 
<li>Fincanciador (USD):</li><li><input type='text' name='cc_financi_updated' value='$row[cc_financi]' /></li>  
<li>Nome Curto do Centro de Custo(sigla):</li><li><input type='text' name='cc_nome_curto_updated' value='$row[cc_nome_curto]' /></li> 
<li>Descrição:</li><li><input type='text' name='cc_descricao_updated' value='$row[cc_descricao]' /></li>  

<li><input type='submit' name='new' /></li><br>  </form>  
</ul>";  
  
if (isset($_POST['new']))  
{  
$result1 = pg_query($conn, "UPDATE  centro_custos SET cc_nome= '$_POST[cc_nome_updated]', cc_periodo='$_POST[cc_periodo_updated]', 
	cc_tipo_financ='$_POST[cc_tipo_updated]', cc_nome_curto='$_POST[cc_nome_curto_updated]', cc_saldo='$_POST[cc_saldo_updated]',
	cc_descricao='$_POST[cc_descricao_updated]', cc_financi='$_POST[cc_financi_updated]'
	");  
	if (!$result1)  
	{  
	echo "Update failed!!";  
	} else  
	{  
	echo "Update successfull;";  
	}  
}  

?>

