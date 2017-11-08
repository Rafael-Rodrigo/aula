<!DOCTYPE html>
<html>
		<head lang="pt-br">
			<title> Passagem de Argumentos por Valor de Referência </title>
			<meta charset="utf-8">
			
		</head>

		<body>
		

		<?php
			echo "<h4>Passagem de Argumentos por valor</h4>";
			
			function salario($num){
				$num +=5;
				echo "Salario com aumento: $num <br/>";
			}
			$salario = 8200;
			salario($salario);
			echo "Salario sem aumento: $salario <br/>";
			
			echo "<h4>Passagem de Argumentos por referência</h4>";
			
			function salarioa(&$num){
				$num +=5;
				echo "Salario com aumento: $num <br/>";
			}
			$salarioa = 8200;
			salarioa($salarioa);
			echo "Salario sem aumento: $salarioa <br/>";
			
			
		?>

		</body>
</html>