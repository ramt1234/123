<?php
function display_header($title) {
  echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"";
  echo "\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">";
  echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
  
  echo "<head>";
  echo "<title>$title</title>";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-16\" />";  
  
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style_gestor.css\" />";
  echo "</head>";
  
  echo "<body>";
 
  echo "<div id=\"titulo\">";
  echo "<p><a href=\"index.php\">CCost:</a>&#160$title</p>";
  echo "</div>";

  echo "<div id=\"utilizador\">"; 
  
  echo "<form method='post' action='accaologout.php'>";
  
  echo "<ul>";
  echo "<li><strong>Utilizador: </strong>".$_SESSION['p_username']."</li>&nbsp;&nbsp;";
    echo "<li><strong>NOME: </strong>".$_SESSION['p_nome']."</li>&nbsp;&nbsp;";
  echo "<input type='submit' name='logout' value='logout'></input>";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  echo "</div>";
}

?>
