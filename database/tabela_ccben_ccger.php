<?php

function display_tabela_ccustos_ger($cc_gerente)
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>Nome do CC</th> <th>Período</th> <th>Tipo de Financiamento</th> <th>Nome Curto do CC</th> <th>Saldo</th> <th>Descrição</th> <th>CC financiamento</th> <th>Gerente</th> </tr>';
        
/*linhas da tabela*/

      $num_linhas = sizeof(get_ccs_gerente($cc_gerente));
      $a=get_ccs_gerente($cc_gerente);
      $i = 0;
  
      while ($i < $num_linhas) {
      
        echo "<tr>";
        echo "<td><a href=operacoes_cc.php?cc_id=".$a[$i]['cc_id']."&nome_cc=".$a[$i]['cc_nome'].">".$a[$i]['cc_nome']."</a></td><td>".$a[i]['cc_periodo']."</td><td>".$a[i]['cc_tipo_financ']."</td><td>".$a[i]['cc_nome_curto']."</td><td>".$a[i]['cc_saldo']."</td><td>".$a[i]['cc_descricao']."</td><td>".$a[i]['cc_financi']."</td><td>".$a[i]['cc_gerente']."</td><td>";
        echo "</tr>";
    
      $i++;
      }

    echo "</table>";
  echo "</div>";
}

function display_tabela_ccustos_ben($cc_ben)
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>Nome do CC</th> <th>Período</th> <th>Tipo de Financiamento</th> <th>Nome Curto do CC</th> <th>Saldo</th> <th>Descrição</th> <th>CC financiamento</th> <th>Gerente</th> </tr>';
        
/*linhas da tabela*/

      $num_linhas = sizeof(get_ccs_benificia($cc_ben));
      $b=get_ccs_benificia($cc_ben);
      $o = 0;
  
      while ($o < $num_linhas) {
      
        echo "<tr>";
        echo "<td><a href=operacoes_cc.php?cc_id=".$b[$o]['cc_id']."&nome_cc=".$b[$o]['cc_nome']."&bi_gestor=".$b[$o]['cc_gerente'].">".$b[$o]['cc_nome']."</a></td><td>".$b[o]['cc_periodo']."</td><td>".$b[o]['cc_tipo_financ']."</td><td>".$b[o]['cc_nome_curto']."</td><td>".$b[o]['cc_saldo']."</td><td>".$b[o]['cc_descricao']."</td><td>".$b[o]['cc_financi']."</td><td>".$b[o]['cc_gerente']."</td><td>";
        echo "</tr>";
    
      $o++;
      }

    echo "</table>";
  echo "</div>";

}

function display_tabela_ccs()
{
echo "<div id=\"tabela\">";
/*cabecalho da tabela */
    echo "<table border=1>";
        echo '<tr> <th>Nome do CC</th> <th>Período</th> <th>Tipo de Financiamento</th> <th>Nome Curto do CC</th> <th>Saldo</th> <th>Descrição</th> <th>CC financiamento</th> <th>Gerente</th> </tr>';
        
/*linhas da tabela*/

      $num_linhas = sizeof(get_ccs());
      $c=get_ccs();
      $p = 0;
  
      while ($p < $num_linhas) {
      
        echo "<tr>";
        echo "<td><a href=operacoes_cc.php?cc_id=".$c[$p]['cc_id']."&nome_cc=".$c[$p]['cc_nome'].">".$c[$p]['cc_nome']."</a></td><td>".$c[p]['cc_periodo']."</td><td>".$c[p]['cc_tipo_financ']."</td><td>".$c[p]['cc_nome_curto']."</td><td>".$c[p]['cc_saldo']."</td><td>".$c[p]['cc_descricao']."</td><td>".$c[p]['cc_financi']."</td><td>".$c[p]['cc_gerente']."</td><td>";
        echo "</tr>";
    
      $p++;
      }

    echo "</table>";
  echo "</div>";
}













