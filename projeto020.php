<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Funções Recursivas </title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			function exibe($num){
				if($num!=0){
					echo "Valor passado para a Função: $num <br/>";
					exibe($num-1);
				}
			}
			
			exibe(10);
		?>

		</body>
</html>