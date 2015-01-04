<?php

function display_tabela_operacoes_cc($cc_id)
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>ID da operação</th> <th>Tipo</th> <th>Valor Monetário</th> <th>Descricao</th> <th>Saldo</th> <th>Data</th> <th>Instancia de CC</th> <th>Resulta da cabimentação</th> <th>Beneficiário</th> </tr>';
        
/*linhas da tabela*/

      $num_linhas = sizeof(operacao_do_cc($cc_id));
      $a=operacao_do_cc($cc_id);
      $i = 0;
  
      while ($i < $num_linhas) {
      
        echo "<tr>";
        echo "<td>".$a[$i]['op_id']."</td><td>".$a[i]['op_tipo']."</td><td>".$a[i]['op_valormon']."</td><td>".$a[i]['op_descricao']."</td><td>".$a[i]['op_data']."</td><td>".$a[i]['op_instancia']."</td><td>".$a[i]['op_resultade']."</td><td>".$a[i]['op_benef']."</td><td>";
        echo "</tr>";
    
      $i++;
      }

    echo "</table>";
  echo "</div>";
}

function display_tabela_transicoes_cc($op_id)
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>ID da transicao</th>  <th>Saldado?</th> <th>Tipo</th> <th>De</th> <th>Para</th> </tr>';
        
/*linhas da tabela*/

      $num_linhas = sizeof(transicoes_do_cc($op_id));
      $b=transicoes_do_cc($op_id);
      $o = 0;
  
      while ($o < $num_linhas) {
      
        echo "<tr>";
        echo "<td>".$b[$o]['t_id']."</td><td>".$b[o]['t_saldado']."</td><td>".$b[o]['t_tipo']."</td><td>".$b[o]['t_de']."</td><td>".$b[o]['t_para']."</td><td>";
        echo "</tr>";
    
      $o++;
      }

    echo "</table>";
  echo "</div>";
}














