<?php
function display_menu(){

  echo "<div id=\"menu\">";

  
	echo "<ul>";
	echo "<li><a href=\"perfil.php\">Perfil</a></li>&nbsp;";
	echo "<li><a href=\"centrodecusto.php\">Centros de Custos</a></li>&nbsp;";

	
	echo "</ul>";
	
  echo "</div>";

}
function display_menu_sa(){
  echo "<div id=\"menu\">";
  
	echo "<ul>";
	echo "<li><a href=\"criar_cc.php\">Criar Centro de Custo</a></li>&nbsp;";
	echo "<li><a href=\"centrodecusto_sa.php\">Ver centro de Custos</a></li>&nbsp;";
	echo "<li><a href=\"ver_cab_sa.php\">Ver cabimentacoes</a></li>&nbsp;";

	
	echo "</ul>";
	
  echo "</div>";

}


function display_menu_admin(){
  echo "<div id=\"menu\">";
  
	echo "<ul>";
	echo "<li><a href=\"perfil.php\">Perfil</a></li>&nbsp;";
	echo "<li><a href=\"pesquisa.php\">Pesquisa_Admin</a></li>&nbsp;";
	echo "<li><a href=\"inserir_instituicao.php\">Inserir Instituicoes</a></li>&nbsp;";
	echo "<li><a href=\"inserir_curso.php\">Inserir Curso</a></li>&nbsp;";
	echo "<li><a href=\"inserir_disciplina.php\">Inserir UC</a></li>&nbsp;";
	echo "<li><a href=\"inserir_docente.php\">Inserir Docente</a></li>&nbsp;";
	
	echo "</ul>";
	
  echo "</div>";

}
function display_menu_adicionar_op_gerir_cc($cc_id){
  echo "<div id=\"menu\">";
  
	echo "<ul>";
	echo "<li><a href=\"inserir_op.php\?cc_id=".$cc_id.">Adicionar Operação</a></li>&nbsp;";
	echo "<li><a href=\"gerir_cc.php\?cc_id=".$cc_id.">Gerir o Centro de Custo</a></li>&nbsp;";
	
	
	echo "</ul>";
	
  echo "</div>";

}
function display_menu_dados($p_id){
  echo "<div id=\"menu\">";
  
	echo "<ul>";
	echo "<li><a href=\"mudar_dados_pessois.php\?p_id=".$p_id.">Gerir Perfil</a></li>&nbsp;";
		
	echo "</ul>";
	
  echo "</div>";

}
function display_menu_ver_cabimentaçoes($cc_id){
	echo "<div id=\"menu\">";
 	echo "<ul>";
	echo "<li><a href=\"cabimentacoes.php\?cc_id=".$cc_id.">Ver Cabimentaçoes</a></li>&nbsp;";
	echo "</ul>";
	echo "</div>";
	
}
function display_menu_cabimentaçoes($cc_id){
	echo "<div id=\"menu\">";
  
	echo "<ul>";
	echo "<li><a href=\"cabimentacoes.php\?cc_id=".$cc_id.">Ver Cabimentaçoes</a></li>&nbsp;";
	echo "<li><a href=\"adicionar_cabimentacoes.php\?cc_id=".$cc_id.">Adicionar Cabimentaçoes</a></li>&nbsp;"; 
	echo"<li><a href=\"gerir_cabimentacoes.php\?cc_id=".$cc_id.">Gerir Cabimentaçoes</a></li>&nbsp;";
	echo "</ul>";
	
	echo "</div>";
}

?>