<?php

  //include_once ("database/accao_inserir_curso.php");

function inserir_operacao($cc_id)
{
echo "<div id=\"tabela\">";
  
 echo "<form method=\"POST\" action=\"database/accao_inserir_operacao.php\">";
		echo "<ul>";

		echo "<li>";
		echo "Tipo de Operacao: <input type='text' name='op_tipo'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Valor Monetario da Operacao: <input type='text' name='op_valormon'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Descricao da Operacao: <input type='text' name='op_descricao'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Data da Operacao (ano-mes-dia): <input type='text' name='op_data'><br>";
		echo "</li>&nbsp;";
        echo "<li>";
        echo "Operacao resulta da Cabimentacao (id): <input type='text' name='op_resultde'><br>";
        echo "</li>&nbsp;";
        echo "<li>";
        echo "Beneficiario da Operacao (mail): <input type='text' name='op_benef'><br>";
        echo "</li>&nbsp;";
    
         <input type='hidden' name='op_instancia' value=$cc_id /* testar */ ><br>";
        
		echo "<li>";
			echo "<input type = \"submit\" name=\"submit\" value=\"Adicionar\"></input>";
		echo "</li>&nbsp;";
		echo "</ul>";		

	echo "</form>";
	
  echo "</div>";
}
?>

