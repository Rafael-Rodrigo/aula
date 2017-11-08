<?php
	session_start();
	

?>
<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Sessão </title>
			<meta charset="utf-8">
			
		</head>

		<body>
			<?php
			
				$_SESSION['usuario'] = 'rafaelrodrigo.as@gmail.com';
				$_SESSION['logado'] = 'Não';
				
				
				unset($_SESSION['usuario']);
				//session_destroy();
				
				echo "Usuario:".$_SESSION['usuario']."<br/>";
				echo "Logado:".$_SESSION['logado'];
				
			?>
		

		</body>
</html>