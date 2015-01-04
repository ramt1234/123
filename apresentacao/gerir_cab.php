<?php
	//este nao vai buscar a funcao ao database, faz a conecao logo
  //include_once ("database/accao_inserir_curso.php");

function gerir_cab_sa($cab_id)
{
global $conn;
$result = pg_query($conn, "SELECT * FROM cabimentacoes where cab_id = '$cab_id'");  
$row = pg_fetch_assoc($result);  
$ap=$_SESSION['p_bi'];

echo "<div id=\"tabela\">";
echo "<ul>  
<form name='update' action='apresentaçao/gerir_cab.php' method='POST' >  
   	
<li>Valor da Cabimentaçao:</li><li><input type='text' name='cab_valorpedido_updated' value='$row[cab_valorpedido]'  /></li>  
<li>Requerimento:</li><li><input type='text' name='cab_requerimento_updated' value='$row[cab_requerimento]' /></li>
<li>Resposta a cabimentaçao:</li><li><input type='text' name='cab_descricao_resposta_updated' value='$row[cab_descricao_resposta]' /></li>

<li><input type='submit' name='new' /></li><br>  </form>  
</ul>";  
  
if (isset($_POST['new']))  
{  
$result1 = pg_query($conn, "UPDATE  cabimentacoes SET cab_valorpedido= '$_POST[cab_valorpedido_updated]', 
	cab_requerimento='$_POST[cab_requerimento_updated]',
	cab_descricao_resposta='$_POST[cab_descricao_resposta_updated]',
	cab_resposta='TRUE',
	cab_apreciado_por='$ap'	
	");  
	if (!$result1)  
	{  
	echo "Update failed!!";  
	} else  
	{  
	echo "Update successfull;";  
	}  
}  

function gerir_cab_mng($cab_id)
{
global $conn;
$result = pg_query($conn, "SELECT * FROM cabimentacoes where cab_id = '$cab_id'");  
$row = pg_fetch_assoc($result);  

echo "<div id=\"tabela\">";
echo "<ul>  
<form name='update' action='apresentaçao/gerir_cab.php' method='POST' >  
   
<li>Valor da Cabimentaçao:</li><li><input type='text' name='cab_valorpedido_updated' value='$row[cab_valorpedido]'  /></li>  
<li>Requerimento:</li><li><input type='text' name='cab_requerimento_updated' value='$row[cab_requerimento]' /></li>


<li><input type='submit' name='new' /></li><br>  </form>  
</ul>";  
  
if (isset($_POST['new']))  
{  
$result1 = pg_query($conn, "UPDATE  cabimentacoes SET cab_valorpedido= '$_POST[cab_valorpedido_updated]', cab_requerimento='$_POST[cab_requerimento_updated]'
	");  
	if (!$result1)  
	{  
	echo "Update failed!!";  
	} 
	else  
	{  
	echo "Update successfull;";  
	}  
}  

?>

