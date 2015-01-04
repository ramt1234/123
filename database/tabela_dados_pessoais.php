<?php

function display_tabela_dados_pessoais($p_bi)
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>Campos</th> <th>Elementos do campo</th> </tr>';
        
/*linhas da tabela*/

      $a=get_dados_pessoais($p_bi);
  
      
        echo "<tr>";
        echo "<td>Nome</td><td>".$a['p_nome']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>NIF</td><td>".$a['p_nif']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>BI</td><td>".$a['p_bi']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Morada</td><td>".$a['p_morada']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Email</td><td>".$a['p_email']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Cargo</td><td>".$a['p_cargo']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Telefone</td><td>".$a['p_telefone']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Telefone Ext</td><td>".$a['p_telfext']."</td><td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td>Instituto</td><td>".$a['p_institut']."</td><td>";
        echo "</tr>";


    echo "</table>";
  echo "</div>";
}














