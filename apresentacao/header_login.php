<?php
function display_header_login() {
  echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"";
  echo "\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">";
  echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
  
  echo "<head>";
  echo "<title>CCost</title>";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";  
  
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style_login.css\" />";
  echo "</head>";
  
  echo "<body>";
  
  echo "<div id=\"titulo\">";
  echo "<p><a href=\"index.php\">CCost</a></p>";
  echo "</div>";
  
  echo "<div id=\"utilizador\">"; 
  echo "<form method='post' action='accaologin.php'>";
  
  echo "<ul>";
  echo "<li>Nome: <input type='text' name='nome'></input></li>&nbsp;&nbsp;";
  echo "<li>Password: <input type='password' name='pass'></input></li>&nbsp;&nbsp;";
  echo "<input type='submit' value='Ok'></input>";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  echo "</div>";

  
  echo "<div id=\"corpo\">";
  echo "<br/>";
  echo "  <p>Gestor de Centro de Custos</p>";
  echo "</div>";
}
?>