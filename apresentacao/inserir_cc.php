<?php
	//!!!MUDAR TUDO!!!
  //include_once ("database/accao_inserir_curso.php");

function inserir_operacao()
{
echo "<div id=\"tabela\">";
  
 echo "<form method=\"POST\" action=\"database/accao_inserir_cc.php\">";
		echo "<ul>";

		echo "<li>";
		echo "Nome do Centro de Custo: <input type='text' name='cc_nome'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Nome Curto (sigla): <input type='text' name='cc_nome_curto'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Perído de actividade: <input type='text' name='cc_periodo'><br>";
		echo "</li>&nbsp;";
		echo "<li>";
		echo "Tipo de Financiamento: <input type='text' name='cc_tipo_financ'><br>";
		echo "</li>&nbsp;";
        echo "<li>";
        echo "Saldo do Centro de Custo: <input type='text' name='cc_saldo'><br>";
        echo "</li>&nbsp;";
        echo "<li>";
        echo "Descriçao : <input type='text' name='cc_descricao'><br>";
        echo "</li>&nbsp;";
        echo "<li>";
        echo "Gerente (e-mail): <input type='text' name='cc_gerente'><br>";
        echo "</li>&nbsp;";
    
        
		echo "<li>";
			echo "<input type = \"submit\" name=\"submit\" value=\"Adicionar\"></input>";
		echo "</li>&nbsp;";
		echo "</ul>";		

	echo "</form>";
	
  echo "</div>";
}
?>

