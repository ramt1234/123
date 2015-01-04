<?php

  //include_once ("database/accao_inserir_curso.php");

function inserir_cabimentacao($cc_id)
{
echo "<div id=\"tabela\">";
  
 echo "<form method=\"POST\" action=\"database/accao_inserir_cabimentacao.php\">";
		echo "<ul>";

		echo "<li>";
		echo "Valor Pedido: <input type='text' name='cab_valorpedido'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Descricao resposta: <input type='text' name='cab_descricao_resposta'><br>";
		echo "</li>&nbsp;";
		//echo "<li>";
		//echo "<input type='hidden' name='cab_resposta' value='FALSE'><br>";
		//echo "</li>&nbsp;";
		echo "<li>";
		echo "Requerimento: <input type='text' name='cab_requerimento'><br>";
		echo "</li>&nbsp;";    
        echo "<input type='hidden' name='cab_criado_por' value='$cc_id' /* testar */ ><br>";
		//echo "<input type='hidden' name='cab_apreciado_por' value=$cc_id /* testar */ ><br>";
        
		echo "<li>";
			echo "<input type = \"submit\" name=\"submit\" value=\"Adicionar\"></input>";
		echo "</li>&nbsp;";
		echo "</ul>";		

	echo "</form>";
	
  echo "</div>";
}
?>

