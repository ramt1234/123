<?php
	// e preciso ver o que temos que por nos includes
	include_once ("common/session.php");
	include_once ("common/database.php");
	
	$login = $_POST['nome'];
	$password = $_POST['pass'];
	$pass_md5 = md5($password);
	$tipoad='admin';
	$tipomain='main_user';
	$tiposa='SA';

	

	$query = "SELECT p_bi, p_nome, p_username, p_password , categoria FROM pessoal WHERE p_username ='".$login."' AND p_password ='".$pass_md5."';";
	$result = pg_exec($conn, $query);
		
	
	$query2 = "SELECT admin_id, pass_admin, adminName FROM administrador WHERE admin_id ='".$login."' AND pass_admin ='".$pass_md5."';";
	$resultad = pg_exec($conn, $query2);		
	
	if (pg_num_rows($resultad) == 0)	
	{
		if(pg_num_rows($result) == 0)
		{
			header("Location: index.php");
			// insert some kind of error of incorrect login
		}
	}
	if (pg_num_rows($resultad) == 0)	
	{
		if(pg_num_rows($result) != 0)
		{	
			$cat = $result["categoria"];	
			$_SESSION['p_nome'] = $result["p_nome,"];			
			$_SESSION['p_username'] = $login;
			$_SESSION['p_bi'] = $result["p_bi"];
			if ($cat == 1)
			{
				$_SESSION['tipo'] = $tiposa;
				header("Location: home.php"); 
			}
			else 
			{
				$_SESSION['tipo'] = $tipomain;
				header("Location: home.php");  
			}
		}
	}
	if (pg_num_rows($resultad) != 0)	
	{	
		$_SESSION['nome_admin'] = $resultad["adminname"];
		$_SESSION['tipo'] = $tipoad;
		header("Location: home.php");  //mudar a pagina

	}

?>
