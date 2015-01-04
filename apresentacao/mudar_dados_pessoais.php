<?php
	
	//!!!!!mudar esta pagina, ainda nao esta feita!!!
	
//este nao vai buscar a funcao ao database, faz a conecao logo

function mudar_dados_pessoais($p_bi)
{
global $conn;

$row=get_dados_pessoais($p_bi)

echo "<div id=\"tabela\">";
echo "<ul>  
<form name='update' action='apresentaçao/mudar_dados_pessoais.php' method='POST' >  
   
<li>Nome:</li><li><input type='text' name='p_nome_updated' value='$row[p_nome]'  /></li>  
<li>Cargo:</li><li><input type='text' name='p_cargo_updated' value='$row[p_cargo]' /></li>

<li>Telefone:</li><li><input type='text' name='p_telefone_updated' value='$row[p_telefone]' /></li> 
<li>Telefone exterior:</li><li><input type='text' name='p_telfext_updated' value='$row[p_telfext]' /></li>  
<li>Morada:</li><li><input type='text' name='p_morada_updated' value='$row[p_morada]' /></li> 
<li>Instituição:</li><li><input type='text' name='p_institut_updated' value='$row[p_institut]' /></li>  

<li><input type='submit' name='new' /></li><br>  </form>  
</ul>";  
  
if (isset($_POST['new']))  
{  
$result1 = pg_query($conn, "UPDATE  pessoal SET p_nome= '$_POST[p_nome_updated]', p_cargo='$_POST[p_cargo_updated]', 
	p_telefone='$_POST[p_telefone_updated]', p_telfext='$_POST[p_telfext_updated]', p_morada='$_POST[p_morada_updated]',
	p_institut='$_POST[p_institut_updated]'
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

